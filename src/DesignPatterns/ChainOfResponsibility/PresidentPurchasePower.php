<?php

namespace LearnCleanCode\DesignPatterns\ChainOfResponsibility;

/**
 * Class PresidentPurchasePower
 * @package LearnCleanCode\DesignPatterns\ChainOfResponsibility
 */
class PresidentPurchasePower extends PurchasePower
{
    /**
     * @return float
     */
    protected function getAllowable(): float
    {
        return self::BASE * 60;
    }

    /**
     * @return string
     */
    protected function getRole(): string
    {
        return 'President';
    }
}
