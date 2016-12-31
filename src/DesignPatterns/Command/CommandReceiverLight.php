<?php

namespace LearnCleanCode\DesignPatterns\Command;

/**
 * Class CommandReceiverLight
 * @package LearnCleanCode\DesignPatterns\Command
 */
class CommandReceiverLight
{
    /**
     * Turn On
     */
    public function turnOn()
    {
        echo 'The light is on' . "\n";
    }

    /**
     * Turn Off
     */
    public function turnOff()
    {
        echo 'The light is off' . "\n";
    }
}
