<?php

namespace LearnCleanCode\DesignPatterns\Monostate;

/**
 * Class ConfigTest
 * @package LearnCleanCode\DesignPatterns\Monostate
 */
class ConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testConfig()
    {
        $config = new Config();
        $config->register('title', 'Application Title');
        $config->register('description', 'Application Description');

        $this->assertEquals('Application Title', $config->getEntry('title'));
        $this->assertEquals('Application Description', $config->getEntry('description'));

        $newConfig = new Config();
        $newConfig->register('pattern', 'Monostate');

        $this->assertEquals('Application Title', $newConfig->getEntry('title'));
        $this->assertEquals('Application Description', $newConfig->getEntry('description'));
        $this->assertEquals('Monostate', $newConfig->getEntry('pattern'));

        unset($config);
        unset($newConfig);

        $newerConfig = new Config();
        $newerConfig->register('class', 'Config');

        $this->assertEquals('Application Title', $newerConfig->getEntry('title'));
        $this->assertEquals('Application Description', $newerConfig->getEntry('description'));
        $this->assertEquals('Monostate', $newerConfig->getEntry('pattern'));
        $this->assertEquals('Config', $newerConfig->getEntry('class'));
    }
}
