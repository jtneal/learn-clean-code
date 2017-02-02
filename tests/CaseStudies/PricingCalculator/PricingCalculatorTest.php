<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator;

use LearnCleanCode\CaseStudies\PricingCalculator\PricingRules\PricingRuleFactory;

/**
 * Class PricingCalculatorTest
 * @package LearnCleanCode\CaseStudies\PricingCalculator
 */
class PricingCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PricingCalculator
     */
    private $pricingCalculator;

    /**
     * Setup
     */
    public function setUp()
    {
        $this->pricingCalculator = new PricingCalculator(new PricingRuleFactory());
    }

    /**
     * Test Flat Price
     */
    public function testFlatPrice()
    {
        $product = (new Product())
            ->setPrice(5.0)
            ->setSKU('FLAT_CANDY');

        $this->assertEquals(25, $this->pricingCalculator->calculatePrice($product, 5));
    }

    /**
     * Test BOGO Price
     */
    public function testBOGOPrice()
    {
        $product = (new Product())
            ->setPrice(5.0)
            ->setSKU('BOGO_CANDY');

        $this->assertEquals(10, $this->pricingCalculator->calculatePrice($product, 4));
        $this->assertEquals(20, $this->pricingCalculator->calculatePrice($product, 7));
    }

    /**
     * Test Buy 4 Get 1 Free Price
     */
    public function testB4G1Price()
    {
        $product = (new Product())
            ->setPrice(5.0)
            ->setSKU('B4G1_CANDY');

        $this->assertEquals(20, $this->pricingCalculator->calculatePrice($product, 5));
        $this->assertEquals(35, $this->pricingCalculator->calculatePrice($product, 8));
    }

    /**
     * Test No Price
     * @expectedException \InvalidArgumentException
     */
    public function testNoPrice()
    {
        $product = (new Product())
            ->setPrice(5.0)
            ->setSKU('NO_CANDY');

        $price = $this->pricingCalculator->calculatePrice($product, 5);
    }
}
