<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class BreakfastMenu
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class BreakfastMenu extends Menu
{
    protected function printMenu()
    {
        echo 'The Breakfast Menu' . "\n";
    }
}
