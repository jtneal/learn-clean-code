<?php

namespace LearnCleanCode\DesignPatterns\State;

/**
 * Class TurnstileFSM
 * @package LearnCleanCode\DesignPatterns\State
 */
abstract class TurnstileFSM
{
    /**
     * @var TurnstileState
     */
    private $state;

    /**
     * Coin
     */
    public function coin()
    {
        $this->state->coin($this);
    }

    /**
     * Pass
     */
    public function pass()
    {
        $this->state->pass($this);
    }

    /**
     * @param TurnstileState $state
     * @return $this
     */
    public function setState(TurnstileState $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Lock
     */
    abstract public function lock();

    /**
     * Unlock
     */
    abstract public function unlock();

    /**
     * Thanks
     */
    abstract public function thanks();

    /**
     * Alarm
     */
    abstract public function alarm();
}
