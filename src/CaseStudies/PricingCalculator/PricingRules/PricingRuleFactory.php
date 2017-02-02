<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator\PricingRules;

/**
 * Class PricingRuleFactory
 * @package LearnCleanCode\CaseStudies\PricingCalculator\PricingRules
 */
class PricingRuleFactory implements PricingRuleFactoryInterface
{
    /**
     * @return PricingRuleInterface[]
     */
    public function makePricingRuleList(): array
    {
        return [
            new FlatPriceRule(),
            new BOGOPriceRule(),
            new Buy4Get1FreePriceRule(),
        ];
    }
}
