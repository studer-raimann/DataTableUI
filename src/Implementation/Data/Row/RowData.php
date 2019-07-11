<?php

namespace srag\DataTable\Implementation\Data\Row;

use srag\DataTable\Component\Data\Row\RowData as RowDataInterface;

/**
 * Class RowData
 *
 * @package srag\DataTable\Implementation\Data\Row
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class RowData implements RowDataInterface {

	/**
	 * @var string
	 */
	protected $row_id = "";
	/**
	 * @var object
	 */
	protected $original_data;


	/**
	 * @inheritDoc
	 */
	public function __construct(string $row_id, object $original_data) {
		$this->row_id = $row_id;
		$this->original_data = $original_data;
	}


	/**
	 * @inheritDoc
	 */
	public function getRowId(): string {
		return $this->row_id;
	}


	/**
	 * @inheritDoc
	 */
	public function withRowId(string $row_id): RowDataInterface {
		$clone = clone $this;

		$clone->row_id = $row_id;

		return $clone;
	}


	/**
	 * @inheritDoc
	 */
	public function getOriginalData(): object {
		return $this->original_data;
	}


	/**
	 * @inheritDoc
	 */
	public function withOriginalData(object $original_data): RowDataInterface {
		$clone = clone $this;

		$clone->original_data = $original_data;

		return $clone;
	}
}