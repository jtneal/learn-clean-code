<?php

namespace LearnCleanCode\DesignPatterns\State;

/**
 * Class UnlockedState
 * @package LearnCleanCode\DesignPatterns\State
 */
class UnlockedState extends SimpleTurnstileState
{
    /**
     * @param TurnstileFSM $turnstileFSM
     */
    public function coin(TurnstileFSM $turnstileFSM)
    {
        $turnstileFSM->thanks();
    }

    /**
     * @param TurnstileFSM $turnstileFSM
     */
    public function pass(TurnstileFSM $turnstileFSM)
    {
        $turnstileFSM->setState(parent::getLocked())->lock();
    }
}
