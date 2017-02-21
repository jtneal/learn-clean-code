<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class Milk
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
class Milk extends CondimentDecorator
{
    /**
     * @var string
     */
    protected $description = 'Milk';

    /**
     * @var float
     */
    protected $cost = 0.49;
}
