<?php

namespace LearnCleanCode\DesignPatterns\ChainOfResponsibility;

/**
 * Class PolicyTest
 * @package LearnCleanCode\DesignPatterns\ChainOfResponsibility
 */
class PolicyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Policy
     */
    private $policy;

    /**
     * Setup
     */
    public function setUp()
    {
        $this->policy = new Policy();
    }

    /**
     * Test Manager
     */
    public function testManager()
    {
        $amount = 2999.99;
        $purpose = 'New Laptop';
        $expected = 'Manager will approve $' . $amount . ' for ' . $purpose;

        $this->assertEquals($expected, $this->policy->getApprover($amount, $purpose));
    }

    /**
     * Test Director
     */
    public function testDirector()
    {
        $amount = 9999.99;
        $purpose = 'New 4K TV';
        $expected = 'Director will approve $' . $amount . ' for ' . $purpose;

        $this->assertEquals($expected, $this->policy->getApprover($amount, $purpose));
    }

    /**
     * Test Vice President
     */
    public function testVicePresident()
    {
        $amount = 14999.99;
        $purpose = 'New Car';
        $expected = 'Vice President will approve $' . $amount . ' for ' . $purpose;

        $this->assertEquals($expected, $this->policy->getApprover($amount, $purpose));
    }

    /**
     * Test President
     */
    public function testPresident()
    {
        $amount = 24999.99;
        $purpose = 'New Luxury Vehicle';
        $expected = 'President will approve $' . $amount . ' for ' . $purpose;

        $this->assertEquals($expected, $this->policy->getApprover($amount, $purpose));
    }

    /**
     * Test No One
     */
    public function testNoOne()
    {
        $amount = 349999.99;
        $purpose = 'New House';
        $expected = 'No one can approve $' . $amount . ' for ' . $purpose;

        $this->assertEquals($expected, $this->policy->getApprover($amount, $purpose));
    }
}
