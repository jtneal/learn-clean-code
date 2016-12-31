<?php

namespace LearnCleanCode\DesignPatterns\Command;

/**
 * Class FlipUpCommand
 * @package LearnCleanCode\DesignPatterns\Command
 */
class FlipUpCommand implements CommandInterface
{
    /**
     * @var CommandReceiverLight
     */
    private $light;

    /**
     * @param CommandReceiverLight $light
     */
    public function __construct(CommandReceiverLight $light)
    {
        $this->light = $light;
    }

    /**
     * Execute
     */
    public function execute()
    {
        $this->light->turnOn();
    }
}
