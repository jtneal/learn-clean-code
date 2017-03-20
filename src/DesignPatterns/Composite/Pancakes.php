<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class Pancakes
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class Pancakes extends Menu
{
    protected function printMenu()
    {
        echo 'Pancakes' . "\n";
    }
}
