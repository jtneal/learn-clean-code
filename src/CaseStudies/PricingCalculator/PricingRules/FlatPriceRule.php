<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator\PricingRules;

use LearnCleanCode\CaseStudies\PricingCalculator\Product;

/**
 * Class FlatPriceRule
 * @package LearnCleanCode\CaseStudies\PricingCalculator\PricingRules
 */
class FlatPriceRule implements PricingRuleInterface
{
    /**
     * @param Product $product
     * @return bool
     */
    public function pricingRuleMatches(Product $product): bool
    {
        return $product->getPricingRuleFromSKU() === 'FLAT';
    }

    /**
     * @param Product $product
     * @param int $quantity
     * @return float
     */
    public function calculatePrice(Product $product, int $quantity): float
    {
        return $product->getPrice() * $quantity;
    }
}
