<?php

namespace srag\TableUI\Implementation;

use ILIAS\UI\Component\Input\Field\Input;
use ILIAS\UI\Implementation\Component\ComponentHelper;
use srag\DIC\Plugin\PluginInterface;
use srag\TableUI\Component\Column\TableColumn;
use srag\TableUI\Component\Data\Fetcher\TableDataFetcher;
use srag\TableUI\Component\Export\TableExportFormat;
use srag\TableUI\Component\Filter\TableFilter;
use srag\TableUI\Component\TableUI as TableUIInterface;

/**
 * Class TableUI
 *
 * @package srag\TableUI\Implementation
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class TableUI implements TableUIInterface {

	use ComponentHelper;
	/**
	 * @var PluginInterface|null
	 */
	protected $plugin = null;
	/**
	 * @var string
	 */
	protected $id = "";
	/**
	 * @var string
	 */
	protected $action = "";
	/**
	 * @var string
	 */
	protected $title = "";
	/**
	 * @var bool
	 */
	protected $fetch_data_needs_filter_first_set = false;
	/**
	 * @var int
	 */
	protected $filter_position = TableFilter::FILTER_TOP;
	/**
	 * @var TableColumn[]
	 */
	protected $columns = [];
	/**
	 * @var TableDataFetcher
	 */
	protected $data_fetcher;
	/**
	 * @var Input[]
	 */
	protected $filter_fields = [];
	/**
	 * @var TableExportFormat[]
	 */
	protected $export_formats = [];
	/**
	 * @var string[]
	 */
	protected $multiple_actions = [];
	/**
	 * @var bool
	 */
	protected $select_all = false;


	/**
	 * TableUI constructor
	 */
	public function __construct() {

	}


	/**
	 * @inheritDoc
	 */
	public function getId(): string {
		return $this->id;
	}


	/**
	 * @inheritDoc
	 */
	public function withId(string $id): TableUIInterface {
		$clone = clone $this;

		$clone->id = $id;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getAction(): string {
		return $this->action;
	}


	/**
	 * @inheritDoc
	 */
	public function withAction(string $action): TableUIInterface {
		$clone = clone $this;

		$clone->action = $action;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getPlugin(): PluginInterface {
		return $this->plugin;
	}


	/**
	 * @inheritDoc
	 */
	public function withPlugin(PluginInterface $plugin): TableUIInterface {
		$this->plugin = $plugin;

		return $this;
	}


	/**
	 * @inheritDoc
	 */
	public function getTitle(): string {
		return $this->title;
	}


	/**
	 * @inheritDoc
	 */
	public function withTitle(string $title): TableUIInterface {
		$clone = clone $this;

		$clone->title = $title;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getFetchDataNeedsFilterFirstSet(): bool {
		return $this->fetch_data_needs_filter_first_set;
	}


	/**
	 * @inheritDoc
	 */
	public function withFetchDataNeedsFilterFirstSet(bool $fetch_data_needs_filter_first_set = false): TableUIInterface {
		$clone = clone $this;

		$clone->fetch_data_needs_filter_first_set = $fetch_data_needs_filter_first_set;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getFilterPosition(): int {
		return $this->filter_position;
	}


	/**
	 * @inheritDoc
	 */
	public function withFilterPosition(int $filter_position = TableFilter::FILTER_TOP): TableUIInterface {
		$clone = clone $this;

		$clone->filter_position = $filter_position;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getColumns(): array {
		return $this->columns;
	}


	/**
	 * @inheritDoc
	 */
	public function withColumns(array $columns): TableUIInterface {
		$clone = clone $this;

		$clone->columns = $columns;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getDataFetcher(): TableDataFetcher {
		return $this->data_fetcher;
	}


	/**
	 * @inheritDoc
	 */
	public function withFetchData(TableDataFetcher $data_fetcher): TableUIInterface {
		$clone = clone $this;

		$clone->data_fetcher = $data_fetcher;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getFilterFields(): array {
		return $this->filter_fields;
	}


	/**
	 * @inheritDoc
	 */
	public function withFilterFields(array $filter_fields): TableUIInterface {
		$clone = clone $this;

		$clone->filter_fields = $filter_fields;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getExportFormats(): array {
		return $this->export_formats;
	}


	/**
	 * @inheritDoc
	 */
	public function withExportFormats(array $export_formats): TableUIInterface {
		$clone = clone $this;

		$clone->export_formats = $export_formats;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getMultipleActions(): array {
		return $this->multiple_actions;
	}


	/**
	 * @inheritDoc
	 */
	public function withMultipleActions(array $multiple_actions): TableUIInterface {
		$clone = clone $this;

		$clone->multiple_actions = $multiple_actions;

		return $clone;
	}


	/**
	 * @return bool
	 */
	public function getSelectAll(): bool {
		return $this->select_all;
	}


	/**
	 * @param bool $select_all
	 *
	 * @return self
	 */
	public function withSelectAll(bool $select_all = false): TableUIInterface {
		$clone = clone $this;

		$clone->select_all = $select_all;

		return $clone;
	}
}