<?php
namespace Kata;

/**
 * Class Adder
 * @package Kata
 */
class MineSweeperFactory
{
    protected $fileName;
    private $fp;
    private $mineSweepers;

    /**
     * MineSweeper constructor.
     * @param $fileName
     */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->fp = fopen($this->fileName, 'r');
    }

    /**
     * @return string
     */
    public function getFileName():string
    {
        return $this->fileName;
    }

    public function getChar()
    {
        return fgetc($this->fp);
    }

    public function getMineSweepers()
    {
        return $this->mineSweepers;
    }

    public function parseFile()
    {
        $rows = $this->getChar();
        $this->getChar();
        $columns = $this->getChar();

        $this->mineSweepers = [
            new MineSweeper($rows, $columns),
            new MineSweeper(1, 1)
        ];
    }

}