<?php

namespace LearnCleanCode\DesignPatterns\Adapter;

/**
 * Interface Switchable
 * @package LearnCleanCode\DesignPatterns\Adapter
 */
interface Switchable
{
    /**
     * Turn On
     */
    public function turnOn();

    /**
     * Turn Off
     */
    public function turnOff();

    /**
     * @return int
     */
    public function getState(): int;
}
