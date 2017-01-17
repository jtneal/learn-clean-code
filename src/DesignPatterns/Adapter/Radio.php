<?php

namespace LearnCleanCode\DesignPatterns\Adapter;

/**
 * Class Radio
 * @package LearnCleanCode\DesignPatterns\Adapter
 */
class Radio
{
    /**
     * @var int
     */
    private $state = 0;

    /**
     * Turn On
     */
    public function radioOn()
    {
        $this->state = 1;
    }

    /**
     * Turn Off
     */
    public function radioOff()
    {
        $this->state = 0;
    }

    /**
     * @return bool
     */
    public function isRadioOn(): bool
    {
        return $this->state === 1;
    }
}
