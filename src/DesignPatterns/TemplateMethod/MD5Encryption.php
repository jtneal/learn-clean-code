<?php

namespace LearnCleanCode\DesignPatterns\TemplateMethod;

/**
 * Class MD5Encryption
 * @package LearnCleanCode\DesignPatterns\TemplateMethod
 */
class MD5Encryption extends Privacy
{
    /**
     * @param string $data
     * @return string
     */
    protected function calculateHash(string $data): string
    {
        return md5($data);
    }
}
