<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class KidsLunchMenu
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class KidsLunchMenu extends Menu
{
    protected function printMenu()
    {
        echo 'The Kids Lunch Menu' . "\n";
    }
}
