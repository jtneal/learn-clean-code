<?php

namespace LearnCleanCode\DesignPatterns\Singleton;

/**
 * Class Config
 * @package LearnCleanCode\DesignPatterns\Singleton
 */
class Config
{
    public $title = 'Application Title';
    public $description = 'Application Description';

    /**
     * Config constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return Config
     */
    public static function getInstance()
    {
        static $instance = null;

        if ($instance === null) {
            $instance = new Config();
        }

        return $instance;
    }
}
