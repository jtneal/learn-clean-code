<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe;

/**
 * Interface AbstractShapeFactory
 * @package LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe
 */
interface AbstractShapeFactory
{
    /**
     * @return Shape
     */
    public static function makeSquare();

    /**
     * @return Shape
     */
    public static function makeCircle();
}
