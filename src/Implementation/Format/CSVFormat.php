<?php

namespace srag\DataTable\Implementation\Format;

use ilCSVWriter;
use srag\DataTable\Component\Column\Column;
use srag\DataTable\Component\Data\Data;
use srag\DataTable\Component\Data\Row\RowData;
use srag\DataTable\Component\Settings\Settings;
use srag\DataTable\Component\Table;

/**
 * Class CSVFormat
 *
 * @package srag\DataTable\Implementation\Format
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class CSVFormat extends AbstractFormat
{

    /**
     * @var ilCSVWriter
     */
    protected $tpl;


    /**
     * @inheritDoc
     */
    public function getFormatId() : string
    {
        return self::FORMAT_CSV;
    }


    /**
     * @inheritDoc
     */
    protected function getFileExtension() : string
    {
        return "csv";
    }


    /**
     * @inheritDoc
     */
    protected function initTemplate(Table $component, ?Data $data, Settings $settings) : void
    {
        $this->tpl = new ilCSVWriter();

        $this->tpl->setSeparator(";");
    }


    /**
     * @inheritDoc
     */
    protected function handleColumns(Table $component, array $columns, Settings $settings) : void
    {
        parent::handleColumns($component, $columns, $settings);

        $this->tpl->addRow();
    }


    /**
     * @inheritDoc
     */
    protected function handleColumn(string $formatted_column, Table $component, Column $column, Settings $settings) : void
    {
        $this->tpl->addColumn($formatted_column);
    }


    /**
     * @inheritDoc
     */
    protected function handleRow(Table $component, array $columns, RowData $row) : void
    {
        parent::handleRow($component, $columns, $row);

        $this->tpl->addRow();
    }


    /**
     * @inheritDoc
     */
    protected function handleRowColumn(string $formatted_row_column) : void
    {
        $this->tpl->addColumn($formatted_row_column);
    }


    /**
     * @inheritDoc
     */
    protected function renderTemplate(Table $component) : string
    {
        return $this->tpl->getCSVString();
    }
}
