<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class Beverage
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
abstract class Beverage implements BeverageInterface
{
    const SIZE_SMALL = 'Tall';
    const SIZE_MEDIUM = 'Grande';
    const SIZE_LARGE = 'Venti';

    /**
     * @var string
     */
    protected $size = self::SIZE_SMALL;

    /**
     * @return string
     */
    public function getSize() : string
    {
        return $this->size;
    }

    /**
     * @param string $size
     * @return Beverage
     */
    public function setSize(string $size) : Beverage
    {
        $this->size = $size;

        return $this;
    }
}
