<?php

namespace LearnCleanCode\DesignPatterns\Observer;

/**
 * Class Subject
 * @package LearnCleanCode\DesignPatterns\Observer
 */
class Subject
{
    /**
     * @var Observer[]
     */
    private $observers;

    /**
     * @param Observer $observer
     */
    public function register(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * Notify
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @param Observer $observer
     */
    public function remove(Observer $observer)
    {
        $key = array_search($observer, $this->observers);

        if ($key !== false) {
            array_splice($this->observers, $key, 1);
        }
    }

    /**
     * Clear
     */
    public function clear()
    {
        $this->observers = [];
    }
}
