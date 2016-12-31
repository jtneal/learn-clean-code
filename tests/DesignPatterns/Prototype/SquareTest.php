<?php

namespace LearnCleanCode\DesignPatterns\Prototype;

/**
 * Class SquareTest
 * @package LearnCleanCode\DesignPatterns\Prototype
 */
class SquareTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Square
     */
    public function testSquare()
    {
        $square = new Square();

        for ($i = 0; $i < 10; $i++) {
            $clone = clone $square;
            $this->assertInstanceOf(Square::class, $clone);
            $this->assertEquals(5, $clone->getSide());
            $this->assertEquals(25, $clone->getArea());
        }
    }
}
