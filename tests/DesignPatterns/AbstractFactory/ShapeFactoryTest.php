<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactory;

/**
 * Class ShapeFactoryTest
 * @package LearnCleanCode\DesignPatterns\AbstractFactory
 */
class ShapeFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test ShapeFactory
     */
    public function testShapeFactory()
    {
        /** @var Square $square */
        $square = ShapeFactory::makeSquare();
        $square->setSide(5);

        /** @var Circle $circle */
        $circle = ShapeFactory::makeCircle();
        $circle->setRadius(5);

        $this->assertInstanceOf(Square::class, $square);
        $this->assertEquals(25, $square->getArea());

        $this->assertInstanceOf(Circle::class, $circle);
        $this->assertEquals(pi() * 25, $circle->getArea());
    }
}
