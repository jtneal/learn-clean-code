<?php

namespace LearnCleanCode\DesignPatterns\State;

/**
 * Class StateTest
 * @package LearnCleanCode\DesignPatterns\State
 */
class StateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SimpleTurnstileFSM
     */
    private $simpleTurnstileFSM;

    public function setUp()
    {
        $this->simpleTurnstileFSM = new SimpleTurnstileFSM();
        $this->simpleTurnstileFSM->setState(SimpleTurnstileState::getLocked());
    }

    /**
     * Test Normal Operation
     */
    public function testNormalOperation()
    {
        $this->simpleTurnstileFSM->coin();
        $this->assertEquals('U', $this->simpleTurnstileFSM->getActions());

        $this->simpleTurnstileFSM->pass();
        $this->assertEquals('UL', $this->simpleTurnstileFSM->getActions());
    }

    /**
     * Test Forced Entry
     */
    public function testForcedEntry()
    {
        $this->simpleTurnstileFSM->pass();
        $this->assertEquals('A', $this->simpleTurnstileFSM->getActions());
    }

    /**
     * Test Double Payment
     */
    public function testDoublePayment()
    {
        $this->simpleTurnstileFSM->coin();
        $this->simpleTurnstileFSM->coin();
        $this->assertEquals('UT', $this->simpleTurnstileFSM->getActions());
    }

    /**
     * Test Many Coins
     */
    public function testManyCoins()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->simpleTurnstileFSM->coin();
        }
        $this->assertEquals('UTTTT', $this->simpleTurnstileFSM->getActions());
    }

    /**
     * Test Many Coins Then Pass
     */
    public function testManyCoinsThenPass()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->simpleTurnstileFSM->coin();
        }
        $this->simpleTurnstileFSM->pass();
        $this->assertEquals('UTTTTL', $this->simpleTurnstileFSM->getActions());
    }
}
