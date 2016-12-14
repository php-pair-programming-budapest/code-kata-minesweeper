<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.12.14.
 */

namespace Kata;


class MineSweeper
{

    protected $rows;
    protected $columns;

    /**
     * MineSweeper constructor.
     * @param $rows
     * @param $columns
     */
    public function __construct($rows, $columns)
    {
        $this->rows = $rows;
        $this->columns = $columns;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @return mixed
     */
    public function getColumns()
    {
        return $this->columns;
    }


}