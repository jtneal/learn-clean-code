<?php

namespace LearnCleanCode\DesignPatterns\Strategy;

/**
 * Class SHA256Encryption
 * @package LearnCleanCode\DesignPatterns\Strategy
 */
class SHA256Encryption implements EncryptionStrategy
{
    /**
     * @param string $data
     * @return string
     */
    public function calculateHash(string $data): string
    {
        return hash('sha256', $data);
    }
}
