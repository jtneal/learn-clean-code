<?php

namespace LearnCleanCode\DesignPatterns\Prototype;

/**
 * Interface Shape
 * @package LearnCleanCode\DesignPatterns\Prototype
 */
interface Shape
{
    /**
     * Clone
     */
    public function __clone();

    /**
     * @return float
     */
    public function getArea(): float;
}
