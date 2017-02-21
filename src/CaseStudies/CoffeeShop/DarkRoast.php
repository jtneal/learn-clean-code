<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class DarkRoast
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
class DarkRoast extends Beverage
{
    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->getSize() . ' Dark Roast Coffee';
    }

    /**
     * @return float
     */
    public function getCost() : float
    {
        return 3.99;
    }
}
