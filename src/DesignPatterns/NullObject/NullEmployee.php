<?php

namespace LearnCleanCode\DesignPatterns\NullObject;

/**
 * Class NullEmployee
 * @package LearnCleanCode\DesignPatterns\NullObject
 */
class NullEmployee implements EmployeeInterface
{
    /**
     * @return int
     */
    public function calculatePay(): int
    {
        return 0;
    }

    /**
     * @return bool
     */
    public function isPayDay(): bool
    {
        return false;
    }
}
