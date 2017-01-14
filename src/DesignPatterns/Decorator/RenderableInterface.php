<?php

namespace LearnCleanCode\DesignPatterns\Decorator;

/**
 * Interface RenderableInterface
 * @package LearnCleanCode\DesignPatterns\Decorator
 */
interface RenderableInterface
{
    /**
     * @return array
     */
    public function renderData(): array;
}
