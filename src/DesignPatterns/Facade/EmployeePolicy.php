<?php

namespace LearnCleanCode\DesignPatterns\Facade;

/**
 * Class EmployeePolicy
 * @package LearnCleanCode\DesignPatterns\Facade
 */
class EmployeePolicy
{
    /**
     * @return int
     */
    public function calculatePay(): int
    {
        return 777;
    }
}
