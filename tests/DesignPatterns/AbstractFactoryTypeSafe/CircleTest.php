<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe;

/**
 * Class CircleTest
 * @package LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe
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
