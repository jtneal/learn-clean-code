<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class OriginalBlend
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
class OriginalBlend extends Beverage
{
    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->getSize() . ' Original Blend Coffee';
    }

    /**
     * @return float
     */
    public function getCost() : float
    {
        return 2.99;
    }
}
