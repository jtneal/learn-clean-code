<?php

namespace LearnCleanCode\DesignPatterns\Adapter;

/**
 * Class AdapterTest
 * @package LearnCleanCode\DesignPatterns\Adapter
 */
class AdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Adapter
     */
    public function testAdapter()
    {
        $light = new Light();
        $lightAdapter = new LightAdapter($light);

        $radio = new Radio();
        $radioAdapter = new RadioAdapter($radio);

        $button = new Button($lightAdapter);

        // Light should turn on
        $button->press();

        $this->assertEquals(1, $lightAdapter->getState());
        $this->assertEquals(0, $radioAdapter->getState());

        // Light should turn off
        $button->press();

        $this->assertEquals(0, $lightAdapter->getState());
        $this->assertEquals(0, $radioAdapter->getState());

        // Hot swap button from light to radio
        $button->setSwitchable($radioAdapter);

        // Radio should turn on
        $button->press();

        $this->assertEquals(0, $lightAdapter->getState());
        $this->assertEquals(1, $radioAdapter->getState());

        // Radio should turn off
        $button->press();

        $this->assertEquals(0, $lightAdapter->getState());
        $this->assertEquals(0, $radioAdapter->getState());
    }
}
