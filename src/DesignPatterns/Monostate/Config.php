<?php

namespace LearnCleanCode\DesignPatterns\Monostate;

/**
 * Class Config
 * @package LearnCleanCode\DesignPatterns\Monostate
 */
class Config
{
    private static $entries = [];

    /**
     * @param string $name
     * @param string $value
     */
    public function register(string $name, string $value)
    {
        self::$entries[$name] = $value;
    }

    /**
     * @param string $name
     * @return string
     */
    public function getEntry(string $name): string
    {
        return self::$entries[$name] ?? '';
    }
}
