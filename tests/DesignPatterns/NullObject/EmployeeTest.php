<?php

namespace LearnCleanCode\DesignPatterns\NullObject;

/**
 * Class EmployeeTest
 * @package LearnCleanCode\DesignPatterns\NullObject
 */
class EmployeeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Employee
     */
    public function testEmployee()
    {
        $employeeService = new EmployeeService();

        $employee0 = $employeeService->getEmployeeById(0);

        $this->assertFalse($employee0->isPayDay());
        $this->assertEquals(0, $employee0->calculatePay());

        $employee1 = $employeeService->getEmployeeById(1);

        $this->assertTrue($employee1->isPayDay());
        $this->assertEquals(777, $employee1->calculatePay());
    }
}
