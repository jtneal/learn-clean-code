<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class Sandwich
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class Sandwich extends Menu
{
    protected function printMenu()
    {
        echo 'Sandwich' . "\n";
    }
}
