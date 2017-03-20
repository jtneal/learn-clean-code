<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class Eggs
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class Eggs extends Menu
{
    protected function printMenu()
    {
        echo 'Eggs' . "\n";
    }
}
