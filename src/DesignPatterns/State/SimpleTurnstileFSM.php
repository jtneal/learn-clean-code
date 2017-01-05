<?php

namespace LearnCleanCode\DesignPatterns\State;

/**
 * Class SimpleTurnstileFSM
 * @package LearnCleanCode\DesignPatterns\State
 */
class SimpleTurnstileFSM extends TurnstileFSM
{
    /**
     * @var string
     */
    private $actions = '';

    /**
     * Lock
     */
    public function lock()
    {
        $this->actions .= 'L';
    }

    /**
     * Unlock
     */
    public function unlock()
    {
        $this->actions .= 'U';
    }

    /**
     * Thanks
     */
    public function thanks()
    {
        $this->actions .= 'T';
    }

    /**
     * Alarm
     */
    public function alarm()
    {
        $this->actions .= 'A';
    }

    /**
     * @return string
     */
    public function getActions()
    {
        return $this->actions;
    }
}
