<?php

namespace LearnCleanCode\DesignPatterns\Observer;

/**
 * Class Clock
 * @package LearnCleanCode\DesignPatterns\Observer
 */
class Clock extends Subject
{
    /**
     * @var int
     */
    private $time;

    /**
     * Tick
     */
    public function tick()
    {
        $this->time++;
        $this->notify();
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }
}
