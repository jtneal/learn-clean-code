<?php

namespace LearnCleanCode\DesignPatterns\State;

/**
 * Class SimpleTurnstileState
 * @package LearnCleanCode\DesignPatterns\State
 */
abstract class SimpleTurnstileState implements TurnstileState
{
    /**
     * @var LockedState
     */
    private static $locked;

    /**
     * @var UnlockedState
     */
    private static $unlocked;

    /**
     * Get LockedState using Singleton pattern to always get this instance
     * @return LockedState
     */
    public static function getLocked()
    {
        if (self::$locked === null) {
            self::$locked = new LockedState();
        }

        return self::$locked;
    }

    /**
     * Get UnlockedState using Singleton pattern to always get this instance
     * @return UnlockedState
     */
    public static function getUnlocked()
    {
        if (self::$unlocked === null) {
            self::$unlocked = new UnlockedState();
        }

        return self::$unlocked;
    }
}
