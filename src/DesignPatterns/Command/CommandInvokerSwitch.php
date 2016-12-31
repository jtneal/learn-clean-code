<?php

namespace LearnCleanCode\DesignPatterns\Command;

/**
 * Class CommandInvokerSwitch
 * @package LearnCleanCode\DesignPatterns\Command
 */
class CommandInvokerSwitch
{
    /**
     * @var CommandInterface[]
     */
    private $history;

    /**
     * @param CommandInterface $cmd
     */
    public function storeAndExecute(CommandInterface $cmd)
    {
        $this->history[] = $cmd;
        $cmd->execute();
    }

    /**
     * @return CommandInterface[]
     */
    public function getHistory(): array
    {
        return $this->history;
    }
}
