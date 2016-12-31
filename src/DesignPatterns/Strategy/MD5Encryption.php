<?php

namespace LearnCleanCode\DesignPatterns\Strategy;

/**
 * Class MD5Encryption
 * @package LearnCleanCode\DesignPatterns\Strategy
 */
class MD5Encryption implements EncryptionStrategy
{
    /**
     * @param string $data
     * @return string
     */
    public function calculateHash(string $data): string
    {
        return md5($data);
    }
}
