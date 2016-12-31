<?php

namespace LearnCleanCode\DesignPatterns\Prototype;

/**
 * Class CircleTest
 * @package LearnCleanCode\DesignPatterns\Prototype
 */
class CircleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Circle
     */
    public function testCircle()
    {
        $circle = new Circle();

        for ($i = 0; $i < 10; $i++) {
            $clone = clone $circle;
            $this->assertInstanceOf(Circle::class, $clone);
            $this->assertEquals(5, $clone->getRadius());
            $this->assertEquals(pi() * 25, $clone->getArea());
        }
    }
}
