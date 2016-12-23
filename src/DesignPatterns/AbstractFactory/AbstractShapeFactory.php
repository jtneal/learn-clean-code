<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactory;

/**
 * Interface AbstractShapeFactory
 * @package LearnCleanCode\DesignPatterns\AbstractFactory
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
