<?php

namespace LearnCleanCode\DesignPatterns\Observer;

/**
 * Class RealTimeDisplay
 * @package LearnCleanCode\DesignPatterns\Observer
 */
class RealTimeDisplay implements Observer
{
    /**
     * @var Clock
     */
    private $subject;

    /**
     * @param Subject $subject
     */
    public function update(Subject $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return int
     */
    public function showTime(): int
    {
        return $this->subject->getTime();
    }
}
