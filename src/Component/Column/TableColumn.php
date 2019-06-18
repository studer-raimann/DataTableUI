<?php

namespace srag\TableUI\Component\Column;

use srag\TableUI\Component\Column\Formater\TableColumnFormater;
use srag\TableUI\Component\Export\Formater\TableExportFormater;

/**
 * Interface TableColumn
 *
 * @package srag\TableUI\Component\Column
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface TableColumn {

	/**
	 * @return string
	 */
	public function getKey(): string;


	/**
	 * @param string $key
	 *
	 * @return self
	 */
	public function withKey(string $key): self;


	/**
	 * @return string
	 */
	public function getTitle(): string;


	/**
	 * @param string $title
	 *
	 * @return self
	 */
	public function withTitle(string $title): self;


	/**
	 * @return TableColumnFormater
	 */
	public function getFormatValue(): TableColumnFormater;


	/**
	 * @param TableColumnFormater $format_value
	 *
	 * @return self
	 */
	public function withFormatValue(TableColumnFormater $format_value): self;


	/**
	 * @return TableExportFormater
	 */
	public function getFormatExportValue(): TableExportFormater;


	/**
	 * @param TableExportFormater $format_export_value
	 *
	 * @return self
	 */
	public function withFormatExportValue(TableExportFormater $format_export_value): self;


	/**
	 * @return bool
	 */
	public function getDefault(): bool;


	/**
	 * @param bool $default
	 *
	 * @return self
	 */
	public function withDefault(bool $default = true): self;


	/**
	 * @return bool
	 */
	public function getSortable(): bool;


	/**
	 * @param bool $sortable
	 *
	 * @return self
	 */
	public function withSortable(bool $sortable = true): self;


	/**
	 * @return bool
	 */
	public function getDragable(): bool;


	/**
	 * @param bool $dragable
	 *
	 * @return self
	 */
	public function withDragable(bool $dragable = false): self;


	/**
	 * @return bool
	 */
	public function getSelectable(): bool;


	/**
	 * @param bool $selectable
	 *
	 * @return self
	 */
	public function withSelectable(bool $selectable = true): self;
}