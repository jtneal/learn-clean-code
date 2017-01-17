<?php

namespace LearnCleanCode\DesignPatterns\Adapter;

/**
 * Class LightAdapter
 * @package LearnCleanCode\DesignPatterns\Adapter
 */
class LightAdapter implements Switchable
{
    /**
     * @var Light
     */
    private $light;

    /**
     * LightAdapter constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    /**
     * Turn On
     */
    public function turnOn()
    {
        $this->light->lightOn();
    }

    /**
     * Turn Off
     */
    public function turnOff()
    {
        $this->light->lightOff();
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return (int) $this->light->isLightOn();
    }
}
