<?php

namespace LearnCleanCode\DesignPatterns\ChainOfResponsibility;

/**
 * Class DirectorPurchasePower
 * @package LearnCleanCode\DesignPatterns\ChainOfResponsibility
 */
class DirectorPurchasePower extends PurchasePower
{
    /**
     * @return float
     */
    protected function getAllowable(): float
    {
        return self::BASE * 20;
    }

    /**
     * @return string
     */
    protected function getRole(): string
    {
        return 'Director';
    }
}
