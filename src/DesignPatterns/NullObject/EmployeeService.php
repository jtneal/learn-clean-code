<?php

namespace LearnCleanCode\DesignPatterns\NullObject;

/**
 * Class EmployeeService
 * @package LearnCleanCode\DesignPatterns\NullObject
 */
class EmployeeService
{
    /**
     * @param int $id
     * @return EmployeeInterface
     */
    public function getEmployeeById(int $id): EmployeeInterface
    {
        if ($id > 0) {
            return new Employee();
        } else {
            return new NullEmployee();
        }
    }
}
