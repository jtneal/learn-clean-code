<?php

namespace LearnCleanCode\DesignPatterns\Prototype;

/**
 * Class Square
 * @package LearnCleanCode\DesignPatterns\Prototype
 */
class Square implements Shape
{
    /**
     * @var float
     */
    private $side = 5;

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
        return pow($this->getSide(), 2);
    }

    /**
     * @return float
     */
    public function getSide(): float
    {
        return $this->side;
    }

    /**
     * @param float $side
     * @return Square
     */
    public function setSide(float $side): Square
    {
        $this->side = $side;

        return $this;
    }
}
