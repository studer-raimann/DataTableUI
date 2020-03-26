<?php

namespace srag\DataTable\Implementation\Column\Formatter\Actions;

use srag\DataTable\Component\Column\Formatter\Actions\ActionsFormatter;
use srag\DataTable\Component\Column\Formatter\Actions\Factory as FactoryInterface;
use srag\DataTable\Utils\DataTableTrait;
use srag\DIC\DICTrait;

/**
 * Class Factory
 *
 * @package srag\DataTable\Implementation\Column\Formatter\Actions
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class Factory implements FactoryInterface
{

    use DICTrait;
    use DataTableTrait;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * Factory constructor
     */
    private function __construct()
    {

    }


    /**
     * @inheritDoc
     */
    public function sort(string $sort_up_action_url, string $sort_down_action_url) : ActionsFormatter
    {
        return new SortFormatter($sort_up_action_url, $sort_down_action_url);
    }
}
