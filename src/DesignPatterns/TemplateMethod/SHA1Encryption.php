<?php

namespace LearnCleanCode\DesignPatterns\TemplateMethod;

/**
 * Class SHA1Encryption
 * @package LearnCleanCode\DesignPatterns\TemplateMethod
 */
class SHA1Encryption extends Privacy
{
    /**
     * @param string $data
     * @return string
     */
    protected function calculateHash(string $data): string
    {
        return sha1($data);
    }
}
