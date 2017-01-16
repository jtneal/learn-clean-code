<?php

namespace LearnCleanCode\DesignPatterns\Bridge\Calculator;

use LearnCleanCode\DesignPatterns\Bridge\Paycheck;

/**
 * Class SalariedCalculator
 * @package LearnCleanCode\DesignPatterns\Bridge\Calculator
 */
class SalariedCalculator implements PaymentCalculator
{
    /**
     * @param Paycheck $paycheck
     * @return float
     */
    public function calcPay(Paycheck $paycheck): float
    {
        $salary = 90000 / 52;

        return $salary;
    }
}
