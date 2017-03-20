<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class Sausage
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class Sausage extends Menu
{
    protected function printMenu()
    {
        echo 'Sausage' . "\n";
    }
}
