<?php

namespace LearnCleanCode\DesignPatterns\Decorator;

/**
 * Class DataPackerDecorator
 * @package LearnCleanCode\DesignPatterns\Decorator
 */
abstract class DataPackerDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     */
    protected $wrapped;

    public function __construct(RenderableInterface $dataPacker)
    {
        $this->wrapped = $dataPacker;
    }
}
