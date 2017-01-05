<?php

namespace LearnCleanCode\DesignPatterns\State;

/**
 * Class LockedState
 * @package LearnCleanCode\DesignPatterns\State
 */
class LockedState extends SimpleTurnstileState
{
    /**
     * @param TurnstileFSM $turnstileFSM
     */
    public function coin(TurnstileFSM $turnstileFSM)
    {
        $turnstileFSM->setState(parent::getUnlocked())->unlock();
    }

    /**
     * @param TurnstileFSM $turnstileFSM
     */
    public function pass(TurnstileFSM $turnstileFSM)
    {
        $turnstileFSM->alarm();
    }
}
