<?php

namespace LearnCleanCode\CaseStudies\CoffeeShop;

/**
 * Class CoffeeShopTest
 * @package LearnCleanCode\CaseStudies\CoffeeShop
 */
class CoffeeShopTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Dark Roast
     */
    public function testDarkRoast()
    {
        $beverage = new DarkRoast();
        $beverage = new Mocha($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);

        $this->assertEquals('Tall Dark Roast Coffee, Mocha, Mocha, Whip', $beverage->getDescription());
        $this->assertEquals(6.46, $beverage->getCost());
    }

    /**
     * Test Light Roast
     */
    public function testLightRoast()
    {
        $beverage = new LightRoast();
        $beverage = new Milk($beverage);

        $this->assertEquals('Tall Light Roast Coffee, Milk', $beverage->getDescription());
        $this->assertEquals(2.48, $beverage->getCost());
    }

    /**
     * Test Original Blend
     */
    public function testOriginalBlend()
    {
        $beverage = new OriginalBlend();
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);

        $this->assertEquals('Tall Original Blend Coffee, Mocha, Whip', $beverage->getDescription());
        $this->assertEquals(4.47, $beverage->getCost());
    }

    /**
     * Test Decaf Large
     */
    public function testDecafLarge()
    {
        $beverage = (new Decaf())->setSize(Beverage::SIZE_LARGE);
        $beverage = new Soy($beverage);

        $this->assertEquals('Venti Decaf Coffee, Soy', $beverage->getDescription());
        $this->assertEquals(3.08, $beverage->getCost());
    }

    /**
     * Test Decaf Medium
     */
    public function testDecafMedium()
    {
        $beverage = (new Decaf())->setSize(Beverage::SIZE_MEDIUM);
        $beverage = new Soy($beverage);

        $this->assertEquals('Grande Decaf Coffee, Soy', $beverage->getDescription());
        $this->assertEquals(3.03, $beverage->getCost());
    }

    /**
     * Test Decaf Small
     */
    public function testDecafSmall()
    {
        $beverage = (new Decaf())->setSize(Beverage::SIZE_SMALL);
        $beverage = new Soy($beverage);

        $this->assertEquals('Tall Decaf Coffee, Soy', $beverage->getDescription());
        $this->assertEquals(2.98, $beverage->getCost());
    }
}
