<?php

namespace LearnCleanCode\DesignPatterns\Proxy;

/**
 * Class Payroll
 * @package LearnCleanCode\DesignPatterns\Proxy
 */
class Payroll
{
    /**
     * @var EmployeeInterface
     */
    private $employee;

    /**
     * Payroll constructor.
     * @param EmployeeInterface $employee
     */
    public function __construct(EmployeeInterface $employee)
    {
        $this->employee = $employee;
    }

    /**
     * @param int $id
     * @return int
     */
    public function calculatePaycheck(int $id): int
    {
        return $this->employee->calculatePaycheck($id);
    }
}
