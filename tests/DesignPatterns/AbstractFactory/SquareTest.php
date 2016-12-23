<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactory;

/**
 * Class SquareTest
 * @package LearnCleanCode\DesignPatterns\AbstractFactory
 */
class SquareTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Square
     */
    public function testSquare()
    {
        $square = (new Square())->setSide(5);

        $this->assertEquals(5, $square->getSide());
        $this->assertEquals(25, $square->getArea());
    }
}
