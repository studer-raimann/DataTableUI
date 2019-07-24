<?php

use srag\DataTable\Component\Data\Data;
use srag\DataTable\Component\Data\Row\RowData;
use srag\DataTable\Component\Filter\Filter;
use srag\DataTable\Component\Filter\Sort\FilterSortField;
use srag\DataTable\Implementation\Data\Fetcher\AbstractDataFetcher;
use srag\DataTable\Implementation\Factory\Factory;

/**
 * @return string
 */
function base(): string {
	global $DIC;

	$DIC->ctrl()->setParameterByClass(ilSystemStyleDocumentationGUI::class, "node_id", "TableDataData");
	$action_url = $DIC->ctrl()->getLinkTargetByClass(ilSystemStyleDocumentationGUI::class);

	$factory = new Factory($DIC); // TODO: Later from `$DIC->ui()->factory()->table()->data()`

	$table = $factory->table("example_datatable_actions", $action_url, "Example data table with actions", [
		$factory->column("column1", "Column 1"),
		$factory->column("column2", "Column 2"),
		$factory->column("column3", "Column 3")
	], new class($DIC) extends AbstractDataFetcher {

		/**
		 * @inheritDoc
		 */
		public function fetchData(Filter $filter): Data {
			$data = array_map(function (int $index): stdClass {
				return (object)[
					"column1" => $index,
					"column2" => "text $index",
					"column3" => ($index % 2 === 0 ? "true" : "false")
				];
			}, range(0, 25));

			$data = array_filter($data, function (stdClass $data) use ($filter): bool {
				$match = true;

				foreach ($filter->getFieldValues() as $key => $value) {
					if (!empty($value)) {
						switch (true) {
							case is_array($value):
								$match = in_array($data->{$key}, $value);
								break;

							case is_integer($data->{$key}):
							case is_float($data->{$key}):
								$match = ($data->{$key} === intval($value));
								break;

							case is_string($data->{$key}):
								$match = (stripos($data->{$key}, $value) !== false);
								break;

							default:
								$match = ($data->{$key} === $value);
								break;
						}

						if (!$match) {
							break;
						}
					}
				}

				return $match;
			});

			usort($data, function (stdClass $o1, stdClass $o2) use ($filter): int {
				foreach ($filter->getSortFields() as $sort_field) {
					$s1 = strval($o1->{$sort_field->getSortField()});
					$s2 = strval($o2->{$sort_field->getSortField()});

					$i = strnatcmp($s1, $s2);

					if ($sort_field->getSortFieldDirection() === FilterSortField::SORT_DIRECTION_DOWN) {
						$i *= - 1;
					}

					if ($i !== 0) {
						return $i;
					}
				}

				return 0;
			});

			$max_count = count($data);

			$data = array_slice($data, $filter->getLimitStart(), $filter->getLimitEnd());

			$data = array_map(function (stdClass $row): RowData {
				return $this->propertyRowData($row->column1, $row);
			}, $data);

			return $this->data($data, $max_count);
		}
	});

	return $DIC->ui()->renderer()->render($table);
}
