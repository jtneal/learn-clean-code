<?php

namespace LearnCleanCode\DesignPatterns\Adapter;

/**
 * Class Light
 * @package LearnCleanCode\DesignPatterns\Adapter
 */
class Light
{
    /**
     * @var int
     */
    private $state = 0;

    /**
     * Turn On
     */
    public function lightOn()
    {
        $this->state = 1;
    }

    /**
     * Turn Off
     */
    public function lightOff()
    {
        $this->state = 0;
    }

    /**
     * @return bool
     */
    public function isLightOn(): bool
    {
        return $this->state === 1;
    }
}
