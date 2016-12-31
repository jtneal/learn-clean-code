<?php

namespace LearnCleanCode\DesignPatterns\Command;

/**
 * Class CommandTest
 * @package LearnCleanCode\DesignPatterns\Command
 */
class CommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Command
     */
    public function testCommand()
    {
        $lamp = new CommandReceiverLight();
        $switchUp = new FlipUpCommand($lamp);
        $switchDown = new FlipDownCommand($lamp);

        $mySwitch = new CommandInvokerSwitch();

        $tasks = ['on', 'off', 'on', 'off'];

        ob_start();
        foreach ($tasks as $task) {
            switch ($task) {
                case 'on':
                    $mySwitch->storeAndExecute($switchUp);
                    break;
                case 'off':
                    $mySwitch->storeAndExecute($switchDown);
                    break;
            }
        }
        $output = explode("\n", trim(ob_get_clean()));
        $history = $mySwitch->getHistory();

        $expected = [
            'The light is on',
            'The light is off',
            'The light is on',
            'The light is off'
        ];

        $this->assertInstanceOf(FlipUpCommand::class, $history[0]);
        $this->assertInstanceOf(FlipDownCommand::class, $history[1]);
        $this->assertInstanceOf(FlipUpCommand::class, $history[2]);
        $this->assertInstanceOf(FlipDownCommand::class, $history[3]);
        $this->assertEquals($expected, $output);
    }
}
