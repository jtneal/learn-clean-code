<?php

namespace LearnCleanCode\DesignPatterns\Bridge;
use LearnCleanCode\DesignPatterns\Bridge\Calculator\CommissionedCalculator;
use LearnCleanCode\DesignPatterns\Bridge\Calculator\HourlyCalculator;
use LearnCleanCode\DesignPatterns\Bridge\Calculator\SalariedCalculator;
use LearnCleanCode\DesignPatterns\Bridge\Scheduler\BiweeklyScheduler;
use LearnCleanCode\DesignPatterns\Bridge\Scheduler\MonthlyScheduler;
use LearnCleanCode\DesignPatterns\Bridge\Scheduler\WeeklyScheduler;

/**
 * Class BridgeTest
 * @package LearnCleanCode\DesignPatterns\Bridge
 */
class BridgeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Bridge
     */
    public function testBridge()
    {
        $weekly = new WeeklyScheduler();
        $biweekly = new BiweeklyScheduler();
        $monthly = new MonthlyScheduler();

        $hourly = new HourlyCalculator();
        $salaried = new SalariedCalculator();
        $commissioned = new CommissionedCalculator();

        $employees = [
            new Employee($weekly, $hourly),
            new Employee($weekly, $salaried),
            new Employee($weekly, $commissioned),
            new Employee($biweekly, $hourly),
            new Employee($biweekly, $salaried),
            new Employee($biweekly, $commissioned),
            new Employee($monthly, $hourly),
            new Employee($monthly, $salaried),
            new Employee($monthly, $commissioned)
        ];

        $payroll = new Payroll($employees);
        $payroll->processPayroll();
        $paychecks = $payroll->getPaychecks();

        $this->assertEquals( 2400.00, $paychecks[0]->getAmount());
        $this->assertEquals( 1730.77, $paychecks[1]->getAmount());
        $this->assertEquals( 5000.00, $paychecks[2]->getAmount());
        $this->assertEquals( 4800.00, $paychecks[3]->getAmount());
        $this->assertEquals( 3461.54, $paychecks[4]->getAmount());
        $this->assertEquals(10000.00, $paychecks[5]->getAmount());
        $this->assertEquals(10400.00, $paychecks[6]->getAmount());
        $this->assertEquals( 7500.00, $paychecks[7]->getAmount());
        $this->assertEquals(21666.67, $paychecks[8]->getAmount());
    }
}
