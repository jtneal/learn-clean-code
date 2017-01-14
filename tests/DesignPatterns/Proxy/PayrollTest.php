<?php

namespace LearnCleanCode\DesignPatterns\Proxy;

/**
 * Class PayrollTest
 * @package LearnCleanCode\DesignPatterns\Proxy
 */
class PayrollTest extends \PHPUnit_Framework_TestCase
{
    public function testPayroll()
    {
        $payroll = new Payroll(new EmployeeProxy());

        $this->assertEquals(0, $payroll->calculatePaycheck(0));
        $this->assertEquals(777, $payroll->calculatePaycheck(1));
    }
}
