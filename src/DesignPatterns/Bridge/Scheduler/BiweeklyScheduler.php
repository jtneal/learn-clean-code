<?php

namespace LearnCleanCode\DesignPatterns\Bridge\Scheduler;

use LearnCleanCode\DesignPatterns\Bridge\Paycheck;

/**
 * Class BiweeklyScheduler
 * @package LearnCleanCode\DesignPatterns\Bridge\Scheduler
 */
class BiweeklyScheduler implements PaymentScheduler
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
        return 52 / 26;
    }
}
