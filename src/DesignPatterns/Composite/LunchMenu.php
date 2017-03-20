<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class LunchMenu
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class LunchMenu extends Menu
{
    protected function printMenu()
    {
        echo 'The Lunch Menu' . "\n";
    }
}
