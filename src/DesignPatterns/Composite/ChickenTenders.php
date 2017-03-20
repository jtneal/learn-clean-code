<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class ChickenTenders
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class ChickenTenders extends Menu
{
    protected function printMenu()
    {
        echo 'Chicken Tenders' . "\n";
    }
}
