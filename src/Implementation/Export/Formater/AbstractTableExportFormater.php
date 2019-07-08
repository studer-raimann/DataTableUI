<?php

namespace srag\DataTable\Implementation\Export\Formater;

use ILIAS\DI\Container;
use srag\DataTable\Component\Export\Formater\TableExportFormater;

/**
 * Class AbstractTableExportFormater
 *
 * @package srag\DataTable\Implementation\Export\Formater
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
abstract class AbstractTableExportFormater implements TableExportFormater {

	/**
	 * @var Container
	 */
	protected $dic;


	/**
	 * @inheritDoc
	 */
	public function __construct(Container $dic) {
		$this->dic = $dic;
	}


	/**
	 * @param string $string
	 *
	 * @return string
	 */
	protected function strToCamelCase(string $string): string {
		return str_replace("_", "", ucwords($string, "_"));
	}
}
