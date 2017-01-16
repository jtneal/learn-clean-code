<?php

namespace LearnCleanCode\DesignPatterns\Bridge\Calculator;

use LearnCleanCode\DesignPatterns\Bridge\Paycheck;

/**
 * Class CommissionedCalculator
 * @package LearnCleanCode\DesignPatterns\Bridge\Calculator
 */
class CommissionedCalculator implements PaymentCalculator
{
    /**
     * @param Paycheck $paycheck
     * @return float
     */
    public function calcPay(Paycheck $paycheck): float
    {
        $weeklyRevenue = 100000;
        $commission = 0.05;

        return $weeklyRevenue * $commission;
    }
}
