<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class Soy
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
class Soy extends CondimentDecorator
{
    /**
     * @var string
     */
    protected $description = 'Soy';

    /**
     * @return float
     */
    public function getCost(): float
    {
        if ($this->getSize() === Beverage::SIZE_SMALL) {
            $this->cost = 0.49;
        } elseif ($this->getSize() === Beverage::SIZE_MEDIUM) {
            $this->cost = 0.54;
        } elseif ($this->getSize() === Beverage::SIZE_LARGE) {
            $this->cost = 0.59;
        }

        return parent::getCost();
    }
}
