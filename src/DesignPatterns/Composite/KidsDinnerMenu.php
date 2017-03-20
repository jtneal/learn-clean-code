<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class KidsDinnerMenu
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class KidsDinnerMenu extends Menu
{
    protected function printMenu()
    {
        echo 'The Kids Dinner Menu' . "\n";
    }
}
