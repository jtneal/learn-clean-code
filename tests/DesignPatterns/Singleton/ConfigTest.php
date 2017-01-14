<?php

namespace LearnCleanCode\DesignPatterns\Singleton;

/**
 * Class ConfigTest
 * @package LearnCleanCode\DesignPatterns\Singleton
 */
class ConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testConfig()
    {
        $config = Config::getInstance();

        $this->assertEquals('Application Title', $config->title);
        $this->assertEquals('Application Description', $config->description);
    }

    /**
     * @expectedException \Error
     */
    public function testConfigSingletonException()
    {
        $config = new Config();
    }
}
