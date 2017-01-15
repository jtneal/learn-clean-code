<?php

namespace LearnCleanCode\DesignPatterns\Flyweight;

/**
 * Class Laptop
 * @package LearnCleanCode\DesignPatterns\Flyweight
 */
class Laptop
{
    /**
     * @var string
     */
    private $make;

    /**
     * @var string
     */
    private $model;

    /**
     * @var int
     */
    private $year;

    /**
     * Laptop constructor.
     * @param string $make
     * @param string $model
     * @param int $year
     */
    public function __construct(string $make, string $model, int $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }
}
