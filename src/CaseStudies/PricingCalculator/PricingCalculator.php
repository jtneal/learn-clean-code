<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator;

use LearnCleanCode\CaseStudies\PricingCalculator\PricingRules\PricingRuleFactoryInterface;

/**
 * Class PricingCalculator
 * @package LearnCleanCode\CaseStudies\PricingCalculator
 */
class PricingCalculator
{
    /**
     * @var PricingRuleFactoryInterface
     */
    private $pricingRuleFactory;

    /**
     * @param PricingRuleFactoryInterface $pricingRuleFactory
     */
    public function __construct(PricingRuleFactoryInterface $pricingRuleFactory)
    {
        $this->pricingRuleFactory = $pricingRuleFactory;
    }

    /**
     * @param Product $product
     * @param int $quantity
     * @return float
     * @throws \InvalidArgumentException
     */
    public function calculatePrice(Product $product, int $quantity): float
    {
        foreach ($this->pricingRuleFactory->makePricingRuleList() as $pricingRule) {
            if ($pricingRule->pricingRuleMatches($product)) {
                return $pricingRule->calculatePrice($product, $quantity);
            }
        }

        throw new \InvalidArgumentException('Pricing Calculation not found for given Product.');
    }
}
