<?php

namespace LearnCleanCode\DesignPatterns\Bridge\Scheduler;

use LearnCleanCode\DesignPatterns\Bridge\Paycheck;

/**
 * Class WeeklyScheduler
 * @package LearnCleanCode\DesignPatterns\Bridge\Scheduler
 */
class WeeklyScheduler implements PaymentScheduler
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
        return 52 / 52;
    }
}
