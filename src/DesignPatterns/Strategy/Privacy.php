<?php

namespace LearnCleanCode\DesignPatterns\Strategy;

/**
 * Class Privacy
 * @package LearnCleanCode\DesignPatterns\Strategy
 */
class Privacy
{
    private $encryptionStrategy;

    public function __construct(EncryptionStrategy $encryptionStrategy)
    {
        $this->encryptionStrategy = $encryptionStrategy;
    }

    /**
     * @param string $data
     * @return string
     */
    public function encrypt(string $data): string
    {
        return $this->encryptionStrategy->calculateHash($data);
    }
}
