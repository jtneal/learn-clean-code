<?php

namespace LearnCleanCode\DesignPatterns\Bridge;

use LearnCleanCode\DesignPatterns\Bridge\Calculator\PaymentCalculator;
use LearnCleanCode\DesignPatterns\Bridge\Scheduler\PaymentScheduler;

/**
 * Class Employee
 * @package LearnCleanCode\DesignPatterns\Bridge
 */
class Employee
{
    /**
     * @var PaymentScheduler
     */
    private $scheduler;

    /**
     * @var PaymentCalculator
     */
    private $calculator;

    /**
     * Employee constructor.
     * @param PaymentScheduler $scheduler
     * @param PaymentCalculator $calculator
     */
    public function __construct(PaymentScheduler $scheduler, PaymentCalculator $calculator)
    {
        $this->scheduler = $scheduler;
        $this->calculator = $calculator;
    }

    /**
     * @return PaymentScheduler
     */
    public function getScheduler(): PaymentScheduler
    {
        return $this->scheduler;
    }

    /**
     * @return PaymentCalculator
     */
    public function getCalculator(): PaymentCalculator
    {
        return $this->calculator;
    }
}
