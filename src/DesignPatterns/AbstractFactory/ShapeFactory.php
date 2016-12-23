<?php

namespace LearnCleanCode\DesignPatterns\AbstractFactory;

/**
 * Class ShapeFactory
 * @package LearnCleanCode\DesignPatterns\AbstractFactory
 */
class ShapeFactory implements AbstractShapeFactory
{
    /**
     * @param string $shapeName
     * @return Shape
     * @throws \InvalidArgumentException
     */
    public static function make(string $shapeName): Shape
    {
        $class = __NAMESPACE__ . '\\' . $shapeName;

        if (class_exists($class)) {
            return new $class();
        } else {
            throw new \InvalidArgumentException($shapeName . ' is not a valid shape.');
        }
    }
}
