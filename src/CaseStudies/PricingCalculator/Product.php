<?php

namespace LearnCleanCode\CaseStudies\PricingCalculator;

/**
 * Class Product
 * @package LearnCleanCode\CaseStudies\PricingCalculator
 */
class Product
{
    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $sku;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Product
     */
    public function setPrice(float $price): Product
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getSKU(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return Product
     */
    public function setSKU(string $sku): Product
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string
     */
    public function getPricingRuleFromSKU()
    {
        $skuParts = explode('_', $this->getSKU());

        return strtoupper($skuParts[0]);
    }
}
