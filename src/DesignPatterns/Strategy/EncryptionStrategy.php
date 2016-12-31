<?php

namespace LearnCleanCode\DesignPatterns\Strategy;

/**
 * Interface EncryptionStrategy
 * @package LearnCleanCode\DesignPatterns\Strategy
 */
interface EncryptionStrategy
{
    /**
     * @param string $data
     * @return string
     */
    public function calculateHash(string $data): string;
}
