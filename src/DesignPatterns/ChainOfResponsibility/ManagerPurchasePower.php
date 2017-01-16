<?php

namespace LearnCleanCode\DesignPatterns\ChainOfResponsibility;

/**
 * Class ManagerPurchasePower
 * @package LearnCleanCode\DesignPatterns\ChainOfResponsibility
 */
class ManagerPurchasePower extends PurchasePower
{
    /**
     * @return float
     */
    protected function getAllowable(): float
    {
        return self::BASE * 10;
    }

    /**
     * @return string
     */
    protected function getRole(): string
    {
        return 'Manager';
    }
}
