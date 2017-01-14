<?php

namespace LearnCleanCode\DesignPatterns\Observer;

/**
 * Class ObserverTest
 * @package LearnCleanCode\DesignPatterns\Observer
 */
class ObserverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Observer
     */
    public function testObserver()
    {
        $clock = new Clock();
        $realTimeDisplay = new RealTimeDisplay();
        $clock->register($realTimeDisplay);

        $clock->tick();
        $this->assertEquals(1, $realTimeDisplay->showTime());

        $clock->tick();
        $this->assertEquals(2, $realTimeDisplay->showTime());

        $clock->clear();
        $clock->tick();
        $this->assertEquals(3, $clock->getTime());

        $clock->register($realTimeDisplay);
        $clock->tick();
        $this->assertEquals(4, $realTimeDisplay->showTime());

        $clock->remove($realTimeDisplay);
        $clock->tick();
        $this->assertEquals(5, $clock->getTime());
    }
}
