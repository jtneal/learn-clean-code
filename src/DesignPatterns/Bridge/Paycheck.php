<?php

namespace LearnCleanCode\DesignPatterns\Bridge;

/**
 * Class Paycheck
 * @package LearnCleanCode\DesignPatterns\Bridge
 */
class Paycheck
{
    /**
     * @var Employee
     */
    private $employee;

    /**
     * @var float
     */
    private $amount = 0;

    /**
     * Paycheck constructor.
     * @param Employee $employee
     */
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    /**
     * @return Employee
     */
    public function getEmployee(): Employee
    {
        return $this->employee;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount)
    {
        $this->amount = $amount;
    }
}
