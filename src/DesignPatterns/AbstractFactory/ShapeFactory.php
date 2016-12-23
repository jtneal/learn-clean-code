<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactory;

/**
 * Class ShapeFactory
 * @package LearnCleanCode\DesignPatterns\AbstractFactory
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
