<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Interface BeverageInterface
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
interface BeverageInterface
{
    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @return float
     */
    public function getCost() : float;

    /**
     * @return string
     */
    public function getSize() : string;

    /**
     * @param string $size
     * @return Beverage
     */
    public function setSize(string $size) : Beverage;
}
