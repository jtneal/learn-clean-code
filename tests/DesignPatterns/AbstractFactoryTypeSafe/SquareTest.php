<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe;

/**
 * Class SquareTest
 * @package LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe
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
