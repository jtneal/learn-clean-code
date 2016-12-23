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
    public function getArea()
    {
        return pow($this->getSide(), 2);
    }

    /**
     * @return float
     */
    public function getSide()
    {
        return $this->side;
    }

    /**
     * @param float $side
     * @return $this
     */
    public function setSide($side)
    {
        $this->side = (float) $side;

        return $this;
    }
}
