<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class Menu
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class Menu
{
    /**
     * @var Menu[]
     */
    private $children = [];

    /**
     * Print
     */
    public function print()
    {
        $this->printMenu();
        $this->printChildren();
    }

    protected function printMenu()
    {
        echo 'The Menu' . "\n";
    }

    protected function printChildren()
    {
        foreach ($this->children as $child) {
            $child->print();
        }
    }

    /**
     * @param Menu $menu
     */
    public function add(Menu $menu)
    {
        $this->children[] = $menu;
    }
}
