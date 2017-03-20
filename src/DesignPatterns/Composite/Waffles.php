<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class Waffles
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class Waffles extends Menu
{
    protected function printMenu()
    {
        echo 'Waffles' . "\n";
    }
}
