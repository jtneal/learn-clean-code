<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class Decaf
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
class Decaf extends Beverage
{
    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->getSize() . ' Decaf Coffee';
    }

    /**
     * @return float
     */
    public function getCost() : float
    {
        return 2.49;
    }
}
