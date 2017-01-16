<?php

namespace LearnCleanCode\DesignPatterns\Bridge\Scheduler;

use LearnCleanCode\DesignPatterns\Bridge\Paycheck;

/**
 * Interface PaymentScheduler
 * @package LearnCleanCode\DesignPatterns\Bridge\Scheduler
 */
interface PaymentScheduler
{
    /**
     * @param Paycheck $paycheck
     * @return bool
     */
    public function isPayday(Paycheck $paycheck): bool;

    /**
     * @return float
     */
    public function getFrequency(): float;
}
