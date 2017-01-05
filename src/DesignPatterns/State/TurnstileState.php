<?php

namespace LearnCleanCode\DesignPatterns\State;

/**
 * Interface TurnstileState
 * @package LearnCleanCode\DesignPatterns\State
 */
interface TurnstileState
{
    /**
     * @param TurnstileFSM $turnstileFSM
     */
    public function coin(TurnstileFSM $turnstileFSM);

    /**
     * @param TurnstileFSM $turnstileFSM
     */
    public function pass(TurnstileFSM $turnstileFSM);
}
