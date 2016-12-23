<?php

namespace LearnCleanCode\DesignPatterns\FactoryMethod;

/**
 * Class SquareTest
 * @package LearnCleanCode\DesignPatterns\FactoryMethod
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
