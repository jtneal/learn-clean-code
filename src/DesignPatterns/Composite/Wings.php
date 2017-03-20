<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class Wings
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class Wings extends Menu
{
    protected function printMenu()
    {
        echo 'Wings' . "\n";
    }
}
