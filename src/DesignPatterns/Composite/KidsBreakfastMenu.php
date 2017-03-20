<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class KidsBreakfastMenu
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class KidsBreakfastMenu extends Menu
{
    protected function printMenu()
    {
        echo 'The Kids Breakfast Menu' . "\n";
    }
}
