<?php

namespace LearnCleanCode\DesignPatterns\Strategy;

/**
 * Class SHA1Encryption
 * @package LearnCleanCode\DesignPatterns\Strategy
 */
class SHA1Encryption implements EncryptionStrategy
{
    /**
     * @param string $data
     * @return string
     */
    public function calculateHash(string $data): string
    {
        return sha1($data);
    }
}
