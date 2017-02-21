<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class CondimentDecorator
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
abstract class CondimentDecorator extends Beverage
{
    /**
     * @var Beverage
     */
    protected $beverage;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var float
     */
    protected $cost;

    /**
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->beverage->getDescription() . ', ' . $this->description;
    }

    /**
     * @return float
     */
    public function getCost() : float
    {
        return $this->beverage->getCost() + $this->cost;
    }

    /**
     * @return string
     */
    public function getSize() : string
    {
        return $this->beverage->getSize();
    }
}
