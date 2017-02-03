<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator\PricingRules;

use LearnCleanCode\CaseStudies\PricingCalculator\Product;

/**
 * Class Buy1Get1FreePriceRule
 * @package LearnCleanCode\CaseStudies\PricingCalculator\PricingRules
 */
class Buy1Get1FreePriceRule implements PricingRuleInterface
{
    /**
     * @param Product $product
     * @return bool
     */
    public function pricingRuleMatches(Product $product): bool
    {
        return $product->getPricingRuleFromSKU() === 'BOGO';
    }

    /**
     * @param Product $product
     * @param int $quantity
     * @return float
     */
    public function calculatePrice(Product $product, int $quantity): float
    {
        return $product->getPrice() * ceil($quantity / 2);
    }
}
