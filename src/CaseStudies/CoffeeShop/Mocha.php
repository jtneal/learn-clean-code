<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class Mocha
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
class Mocha extends CondimentDecorator
{
    /**
     * @var string
     */
    protected $description = 'Mocha';

    /**
     * @var float
     */
    protected $cost = 0.99;
}
