<?php

namespace LearnCleanCode\DesignPatterns\TemplateMethod;

/**
 * Class SHA256Encryption
 * @package LearnCleanCode\DesignPatterns\TemplateMethod
 */
class SHA256Encryption extends Privacy
{
    /**
     * @param string $data
     * @return string
     */
    protected function calculateHash(string $data): string
    {
        return hash('sha256', $data);
    }
}
