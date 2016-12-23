<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactory;

/**
 * Interface AbstractShapeFactory
 * @package LearnCleanCode\DesignPatterns\AbstractFactory
 */
interface AbstractShapeFactory
{
    /**
     * @param string $shapeName
     * @return Shape
     */
    public static function make(string $shapeName): Shape;
}
