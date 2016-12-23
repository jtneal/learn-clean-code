<?php

namespace LearnCleanCode\DesignPatterns\FactoryMethod;

/**
 * Class CircleTest
 * @package LearnCleanCode\DesignPatterns\FactoryMethod
 */
class CircleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Circle
     */
    public function testCircle()
    {
        $circle = (new Circle())->setRadius(5);

        $this->assertEquals(5, $circle->getRadius());
        $this->assertEquals(pi() * 25, $circle->getArea());
    }
}
