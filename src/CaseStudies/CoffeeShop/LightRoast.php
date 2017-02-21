<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class LightRoast
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
class LightRoast extends Beverage
{
    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->getSize() . ' Light Roast Coffee';
    }

    /**
     * @return float
     */
    public function getCost() : float
    {
        return 1.99;
    }
}
