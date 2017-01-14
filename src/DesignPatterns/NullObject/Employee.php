<?php

namespace LearnCleanCode\DesignPatterns\NullObject;

/**
 * Class Employee
 * @package LearnCleanCode\DesignPatterns\NullObject
 */
class Employee implements EmployeeInterface
{
    /**
     * @return int
     */
    public function calculatePay(): int
    {
        return 777;
    }

    /**
     * @return bool
     */
    public function isPayDay(): bool
    {
        return true;
    }
}
