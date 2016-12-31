<?php

namespace LearnCleanCode\DesignPatterns\Prototype;

/**
 * Class Circle
 * @package LearnCleanCode\DesignPatterns\Prototype
 */
class Circle implements Shape
{
    /**
     * @var float
     */
    private $radius = 5;

    /**
     * Clone
     */
    public function __clone()
    {
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return pi() * pow($this->getRadius(), 2);
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     * @return Circle
     */
    public function setRadius(float $radius): Circle
    {
        $this->radius = $radius;

        return $this;
    }
}
