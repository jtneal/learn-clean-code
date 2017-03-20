<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class DinnerMenu
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class DinnerMenu extends Menu
{
    protected function printMenu()
    {
        echo 'The Dinner Menu' . "\n";
    }
}
