<?php

namespace LearnCleanCode\DesignPatterns\Adapter;

/**
 * Class RadioAdapter
 * @package LearnCleanCode\DesignPatterns\Adapter
 */
class RadioAdapter implements Switchable
{
    /**
     * @var Radio
     */
    private $radio;

    /**
     * RadioAdapter constructor.
     * @param Radio $radio
     */
    public function __construct(Radio $radio)
    {
        $this->radio = $radio;
    }

    /**
     * Turn On
     */
    public function turnOn()
    {
        $this->radio->radioOn();
    }

    /**
     * Turn Off
     */
    public function turnOff()
    {
        $this->radio->radioOff();
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return (int) $this->radio->isRadioOn();
    }
}
