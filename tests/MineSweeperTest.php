<?php
namespace Kata\Tests;

use Kata\MineSweeper;
use Kata\MineSweeperFactory;

class MineSweeperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var MineSweeperFactory
     */
    protected  $_factory;

    public function setUp()
    {
        $filename = __DIR__ . "/../src/input.txt";
        $this->_factory = new MineSweeperFactory($filename);
    }

    public function testFileIsReadable()
    {
        $this->assertTrue(is_readable($this->_factory->getFileName()));
    }

    public function testToGetChar()
    {
        $this->assertEquals('4', $this->_factory->getChar());
    }

    public function testGetTwoMineSweepers()
    {
        $this->_factory->parseFile();
        $this->assertEquals(2, count($this->_factory->getMineSweepers()));
    }

    public function testInstancesOfMineSweeper()
    {
        $this->_factory->parseFile();
        foreach ($this->_factory->getMineSweepers() as $mineSweeper) {
            $this->assertInstanceOf(MineSweeper::class, $mineSweeper);
        }
    }

    public function testRowsAndColumnsOfMinesweeper()
    {
        $this->_factory->parseFile();

        /** @var MineSweeper $ms */
        $ms = $this->_factory->getMineSweepers()[0];

        $this->assertEquals(4, $ms->getRows());
        $this->assertEquals(4, $ms->getColumns());
    }


}