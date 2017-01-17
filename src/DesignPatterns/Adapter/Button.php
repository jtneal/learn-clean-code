<?php

namespace LearnCleanCode\DesignPatterns\Adapter;

/**
 * Class Button
 * @package LearnCleanCode\DesignPatterns\Adapter
 */
class Button
{
    /**
     * @var Switchable
     */
    private $switchable;

    /**
     * Button constructor.
     * @param Switchable $switchable
     */
    public function __construct(Switchable $switchable)
    {
        $this->setSwitchable($switchable);
    }

    /**
     * Press
     */
    public function press()
    {
        if ($this->switchable->getState()) {
            $this->switchable->turnOff();
        } else {
            $this->switchable->turnOn();
        }
    }

    /**
     * @param Switchable $switchable
     */
    public function setSwitchable(Switchable $switchable)
    {
        $this->switchable = $switchable;
    }
}
