<?php

namespace LearnCleanCode\DesignPatterns\Flyweight;

/**
 * Class FlyweightTest
 * @package LearnCleanCode\DesignPatterns\Flyweight
 */
class FlyweightTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Flyweight
     */
    public function testFlyweight()
    {
        $warehouse = new Warehouse();
        $factory = new LaptopFactory();

        $warehouse->addLaptop($factory->getLaptop(1), 'F0A500', new \DateTime('1/1/2017'));
        $warehouse->addLaptop($factory->getLaptop(1), 'F0A501', new \DateTime('1/2/2017'));
        $warehouse->addLaptop($factory->getLaptop(1), 'F0A502', new \DateTime('1/3/2017'));
        $warehouse->addLaptop($factory->getLaptop(2), 'F0A600', new \DateTime('1/4/2017'));
        $warehouse->addLaptop($factory->getLaptop(2), 'F0A601', new \DateTime('1/5/2017'));
        $warehouse->addLaptop($factory->getLaptop(2), 'F0A602', new \DateTime('1/6/2017'));
        $warehouse->addLaptop($factory->getLaptop(3), 'F0A700', new \DateTime('1/7/2017'));
        $warehouse->addLaptop($factory->getLaptop(3), 'F0A701', new \DateTime('1/8/2017'));
        $warehouse->addLaptop($factory->getLaptop(3), 'F0A702', new \DateTime('1/9/2017'));

        $text1 = "Dell\tXPS 13\t2017\t";
        $text2 = "Asus\tZenBook UX305\t2017\t";
        $text3 = "HP\tChromebook 13\t2017\t";

        $expected = $text1 . "F0A500\t2017-01-01\n"
                  . $text1 . "F0A501\t2017-01-02\n"
                  . $text1 . "F0A502\t2017-01-03\n"
                  . $text2 . "F0A600\t2017-01-04\n"
                  . $text2 . "F0A601\t2017-01-05\n"
                  . $text2 . "F0A602\t2017-01-06\n"
                  . $text3 . "F0A700\t2017-01-07\n"
                  . $text3 . "F0A701\t2017-01-08\n"
                  . $text3 . "F0A702\t2017-01-09";

        $this->assertEquals($expected, $warehouse->exportLaptops());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidLaptop()
    {
        $factory = new LaptopFactory();

        $laptop = $factory->getLaptop(0);
    }
}
