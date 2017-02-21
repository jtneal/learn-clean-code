<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class Whip
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
class Whip extends CondimentDecorator
{
    /**
     * @var string
     */
    protected $description = 'Whip';

    /**
     * @var float
     */
    protected $cost = 0.49;
}
