<?php

namespace LearnCleanCode\DesignPatterns\Decorator;

/**
 * Class DataService
 * @package LearnCleanCode\DesignPatterns\Decorator
 */
class DataService implements RenderableInterface
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function renderData(): array
    {
        return $this->data;
    }
}
