<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactory;

/**
 * Class Circle
 * @package LearnCleanCode\DesignPatterns\AbstractFactory
 */
class Circle implements Shape
{
    /**
     * @var float
     */
    private $radius;

    /**
     * @return float
     */
    public function getArea()
    {
        return pi() * pow($this->getRadius(), 2);
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->radius = (float) $radius;

        return $this;
    }
}
