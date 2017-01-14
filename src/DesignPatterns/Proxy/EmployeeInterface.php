<?php

namespace LearnCleanCode\DesignPatterns\Proxy;

/**
 * Interface EmployeeInterface
 * @package LearnCleanCode\DesignPatterns\Proxy
 */
interface EmployeeInterface
{
    /**
     * @param int $id
     * @return int
     */
    public function calculatePaycheck(int $id): int;
}
