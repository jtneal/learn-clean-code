<?php

namespace LearnCleanCode\DesignPatterns\Composite;

/**
 * Class CompositeTest
 * @package LearnCleanCode\DesignPatterns\Composite
 */
class CompositeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Composite
     */
    public function testComposite()
    {
        // Breakfast
        $eggs = new Eggs();
        $sausage = new Sausage();
        $pancakes = new Pancakes();
        $waffles = new Waffles();

        $kidsBreakfastMenu = new KidsBreakfastMenu();
        $kidsBreakfastMenu->add($pancakes);
        $kidsBreakfastMenu->add($waffles);

        $breakfastMenu = new BreakfastMenu();
        $breakfastMenu->add($eggs);
        $breakfastMenu->add($sausage);
        $breakfastMenu->add($kidsBreakfastMenu);

        // Lunch
        $sandwich = new Sandwich();
        $grilledCheese = new GrilledCheese();

        $kidsLunchMenu = new KidsLunchMenu();
        $kidsLunchMenu->add($grilledCheese);

        $lunchMenu = new LunchMenu();
        $lunchMenu->add($sandwich);
        $lunchMenu->add($kidsLunchMenu);

        // Dinner
        $pizza = new Pizza();
        $wings = new Wings();
        $chickenTenders = new ChickenTenders();

        $kidsDinnerMenu = new KidsDinnerMenu();
        $kidsDinnerMenu->add($chickenTenders);

        $dinnerMenu = new DinnerMenu();
        $dinnerMenu->add($pizza);
        $dinnerMenu->add($wings);
        $dinnerMenu->add($kidsDinnerMenu);

        $menu = new Menu();
        $menu->add($breakfastMenu);
        $menu->add($lunchMenu);
        $menu->add($dinnerMenu);

        ob_start();
        $menu->print();
        $output = explode("\n", ob_get_clean());

        $this->assertEquals('The Menu', $output[0]);
        $this->assertEquals('The Breakfast Menu', $output[1]);
        $this->assertEquals('Eggs', $output[2]);
        $this->assertEquals('Sausage', $output[3]);
        $this->assertEquals('The Kids Breakfast Menu', $output[4]);
        $this->assertEquals('Pancakes', $output[5]);
        $this->assertEquals('Waffles', $output[6]);
        $this->assertEquals('The Lunch Menu', $output[7]);
        $this->assertEquals('Sandwich', $output[8]);
        $this->assertEquals('The Kids Lunch Menu', $output[9]);
        $this->assertEquals('Grilled Cheese', $output[10]);
        $this->assertEquals('The Dinner Menu', $output[11]);
        $this->assertEquals('Pizza', $output[12]);
        $this->assertEquals('Wings', $output[13]);
        $this->assertEquals('The Kids Dinner Menu', $output[14]);
        $this->assertEquals('Chicken Tenders', $output[15]);
    }
}
