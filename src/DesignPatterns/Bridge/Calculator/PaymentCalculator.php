<?php

namespace LearnCleanCode\DesignPatterns\Bridge\Calculator;

use LearnCleanCode\DesignPatterns\Bridge\Paycheck;

/**
 * Interface PaymentCalculator
 * @package LearnCleanCode\DesignPatterns\Bridge\Calculator
 */
interface PaymentCalculator
{
    /**
     * @param Paycheck $paycheck
     * @return float
     */
    public function calcPay(Paycheck $paycheck): float;
}
