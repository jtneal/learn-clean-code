<?php

namespace LearnCleanCode\DesignPatterns\TemplateMethod;

/**
 * Class Privacy
 * @package LearnCleanCode\DesignPatterns\TemplateMethod
 */
abstract class Privacy
{
    /**
     * @param string $data
     * @return string
     */
    public function encrypt(string $data): string
    {
        return $this->calculateHash($data);
    }

    abstract protected function calculateHash(string $data): string;
}
