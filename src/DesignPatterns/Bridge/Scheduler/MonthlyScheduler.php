<?php

namespace LearnCleanCode\DesignPatterns\Bridge\Scheduler;

use LearnCleanCode\DesignPatterns\Bridge\Paycheck;

/**
 * Class MonthlyScheduler
 * @package LearnCleanCode\DesignPatterns\Bridge\Scheduler
 */
class MonthlyScheduler implements PaymentScheduler
{
    /**
     * @param Paycheck $paycheck
     * @return bool
     */
    public function isPayday(Paycheck $paycheck): bool
    {
        return true;
    }

    /**
     * @return float
     */
    public function getFrequency(): float
    {
        return 52 / 12;
    }
}
