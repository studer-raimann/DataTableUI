<?php

namespace srag\DataTable\Component\Column\Action;

use ILIAS\UI\Component\Button\Shy;
use srag\DataTable\Component\Column\Column;
use srag\DataTable\Component\Data\Row\RowData;

/**
 * Interface ActionColumn
 *
 * @package srag\DataTable\Component\Column\Action
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface ActionColumn extends Column
{

    /**
     * @param RowData $row
     *
     * @return Shy[]
     */
    public function getActions(RowData $row) : array;
}
