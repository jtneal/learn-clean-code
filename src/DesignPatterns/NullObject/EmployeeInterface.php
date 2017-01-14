<?php

namespace LearnCleanCode\DesignPatterns\NullObject;

/**
 * Interface EmployeeInterface
 * @package LearnCleanCode\DesignPatterns\NullObject
 */
interface EmployeeInterface
{
    /**
     * @return int
     */
    public function calculatePay(): int;

    /**
     * @return bool
     */
    public function isPayDay(): bool;
}
