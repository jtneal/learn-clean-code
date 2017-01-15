<?php

namespace LearnCleanCode\DesignPatterns\Facade;

/**
 * Class EmployeeFacadeTest
 * @package LearnCleanCode\DesignPatterns\Facade
 */
class EmployeeFacadeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Employee Facade
     */
    public function testEmployeeFacade()
    {
        $employee = new EmployeeFacade(new EmployeePolicy(), new EmployeeGateway(), new EmployeeReports());

        $this->assertEquals(777, $employee->calculatePay());
        $this->assertTrue($employee->save());
        $this->assertEquals('Software Engineer on the Backend Engineering Team.', $employee->describeEmployee());
    }
}
