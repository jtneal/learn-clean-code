<?php

namespace LearnCleanCode\DesignPatterns\FactoryMethod;

/**
 * Class ShapeFactoryTest
 * @package LearnCleanCode\DesignPatterns\FactoryMethod
 */
class ShapeFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test ShapeFactory
     */
    public function testShapeFactory()
    {
        /** @var Square $square */
        $square = ShapeFactory::make('Square');
        $square->setSide(5);

        /** @var Circle $circle */
        $circle = ShapeFactory::make('Circle');
        $circle->setRadius(5);

        $this->assertInstanceOf(Square::class, $square);
        $this->assertEquals(25, $square->getArea());

        $this->assertInstanceOf(Circle::class, $circle);
        $this->assertEquals(pi() * 25, $circle->getArea());

        $this->expectException('InvalidArgumentException');
        $test = ShapeFactory::make('Test');
    }
}
