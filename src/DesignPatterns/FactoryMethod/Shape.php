<?php

namespace LearnCleanCode\DesignPatterns\FactoryMethod;

/**
 * Interface Shape
 * @package LearnCleanCode\DesignPatterns\FactoryMethod
 */
interface Shape
{
    /**
     * @return float
     */
    public function getArea(): float;
}
