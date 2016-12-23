<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe;

/**
 * Class ShapeFactory
 * @package LearnCleanCode\DesignPatterns\AbstractFactoryTypeSafe
 */
class ShapeFactory implements AbstractShapeFactory
{
    /**
     * @return Shape
     */
    public static function makeSquare()
    {
        return new Square();
    }

    /**
     * @return Shape
     */
    public static function makeCircle()
    {
        return new Circle();
    }
}
