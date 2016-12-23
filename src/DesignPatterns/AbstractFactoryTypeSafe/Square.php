<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe;

/**
 * Class Square
 * @package LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe
 */
class Square implements Shape
{
    /**
     * @var float
     */
    private $side;

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
    public function setSide(float $side) : Square
    {
        $this->side = $side;

        return $this;
    }
}
