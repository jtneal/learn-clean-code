<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class Pizza
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class Pizza extends Menu
{
    protected function printMenu()
    {
        echo 'Pizza' . "\n";
    }
}
