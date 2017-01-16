<?php

namespace LearnCleanCode\DesignPatterns\ChainOfResponsibility;

/**
 * Class VicePresidentPurchasePower
 * @package LearnCleanCode\DesignPatterns\ChainOfResponsibility
 */
class VicePresidentPurchasePower extends PurchasePower
{
    /**
     * @return float
     */
    protected function getAllowable(): float
    {
        return self::BASE * 40;
    }

    /**
     * @return string
     */
    protected function getRole(): string
    {
        return 'Vice President';
    }
}
