<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator\PricingRules;

/**
 * Interface PricingRuleFactoryInterface
 * @package LearnCleanCode\CaseStudies\PricingCalculator\PricingRules
 */
interface PricingRuleFactoryInterface
{
    /**
     * @return PricingRuleInterface[]
     */
    public function makePricingRuleList(): array;
}
