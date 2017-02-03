<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator;

use LearnCleanCode\CaseStudies\PricingCalculator\PricingRules\PricingRuleFactoryInterface;
use LearnCleanCode\CaseStudies\PricingCalculator\PricingRules\PricingRuleInterface;

/**
 * Class PricingCalculator
 * @package LearnCleanCode\CaseStudies\PricingCalculator
 */
class PricingCalculator
{
    /**
     * @var PricingRuleInterface[]
     */
    private $pricingRuleList;

    /**
     * @param PricingRuleFactoryInterface $pricingRuleFactory
     */
    public function __construct(PricingRuleFactoryInterface $pricingRuleFactory)
    {
        $this->pricingRuleList = $pricingRuleFactory->makePricingRuleList();
    }

    /**
     * @param Product $product
     * @param int $quantity
     * @return float
     * @throws \InvalidArgumentException
     */
    public function calculatePrice(Product $product, int $quantity): float
    {
        foreach ($this->pricingRuleList as $pricingRule) {
            if ($pricingRule->pricingRuleMatches($product)) {
                return $pricingRule->calculatePrice($product, $quantity);
            }
        }

        throw new \InvalidArgumentException('Pricing Calculation not found for given Product.');
    }
}
