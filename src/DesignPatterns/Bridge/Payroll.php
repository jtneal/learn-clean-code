<?php

namespace LearnCleanCode\DesignPatterns\Bridge;

/**
 * Class Payroll
 * @package LearnCleanCode\DesignPatterns\Bridge
 */
class Payroll
{
    /**
     * @var Employee[]
     */
    private $employees;

    /**
     * @var Paycheck[]
     */
    private $paychecks;

    /**
     * Payroll constructor.
     * @param Employee[] $employees
     */
    public function __construct(array $employees)
    {
        $this->employees = $employees;
    }

    /**
     * Process
     */
    public function processPayroll()
    {
        foreach ($this->employees as $employee) {
            $scheduler = $employee->getScheduler();
            $paycheck = new Paycheck($employee);

            if ($scheduler->isPayday($paycheck)) {
                $calculator = $employee->getCalculator();
                $amount = round($calculator->calcPay($paycheck) * $scheduler->getFrequency(), 2, PHP_ROUND_HALF_DOWN);
                $paycheck->setAmount($amount);

                $this->paychecks[] = $paycheck;
            }
        }
    }

    /**
     * @return Paycheck[]
     */
    public function getPaychecks(): array
    {
        return $this->paychecks;
    }
}
