<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator\PricingRules;

use LearnCleanCode\CaseStudies\PricingCalculator\Product;

/**
 * Interface PricingRuleInterface
 * @package LearnCleanCode\CaseStudies\PricingCalculator\PricingRules
 */
interface PricingRuleInterface
{
    /**
     * @param Product $product
     * @return bool
     */
    public function pricingRuleMatches(Product $product): bool;

    /**
     * @param Product $product
     * @param int $quantity
     * @return float
     */
    public function calculatePrice(Product $product, int $quantity): float;
}
