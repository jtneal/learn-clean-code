<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator\PricingRules;

use LearnCleanCode\CaseStudies\PricingCalculator\Product;

/**
 * Class BOGOPriceRule
 * @package LearnCleanCode\CaseStudies\PricingCalculator\PricingRules
 */
class BOGOPriceRule implements PricingRuleInterface
{
    /**
     * @param Product $product
     * @return bool
     */
    public function pricingRuleMatches(Product $product): bool
    {
        return strtoupper(substr($product->getSKU(), 0, 4)) === 'BOGO';
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
