<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator\PricingRules;

use LearnCleanCode\CaseStudies\PricingCalculator\Product;

/**
 * Class Buy4Get1FreePriceRule
 * @package LearnCleanCode\CaseStudies\PricingCalculator\PricingRules
 */
class Buy4Get1FreePriceRule implements PricingRuleInterface
{
    /**
     * @param Product $product
     * @return bool
     */
    public function pricingRuleMatches(Product $product): bool
    {
        return strtoupper(substr($product->getSKU(), 0, 4)) === 'B4G1';
    }

    /**
     * @param Product $product
     * @param int $quantity
     * @return float
     */
    public function calculatePrice(Product $product, int $quantity): float
    {
        return $product->getPrice() * ceil(($quantity / 5) * 4);
    }
}
