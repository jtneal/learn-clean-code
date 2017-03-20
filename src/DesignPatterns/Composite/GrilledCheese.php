<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class GrilledCheese
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class GrilledCheese extends Menu
{
    protected function printMenu()
    {
        echo 'Grilled Cheese' . "\n";
    }
}
