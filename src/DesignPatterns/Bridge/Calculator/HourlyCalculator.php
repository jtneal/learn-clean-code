<?php

namespace LearnCleanCode\DesignPatterns\Bridge\Calculator;

use LearnCleanCode\DesignPatterns\Bridge\Paycheck;

/**
 * Class HourlyCalculator
 * @package LearnCleanCode\DesignPatterns\Bridge\Calculator
 */
class HourlyCalculator implements PaymentCalculator
{
    /**
     * @param Paycheck $paycheck
     * @return float
     */
    public function calcPay(Paycheck $paycheck): float
    {
        $weeklyHours = 40;
        $rate = 60;

        return $weeklyHours * $rate;
    }
}
