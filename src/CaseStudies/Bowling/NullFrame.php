<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class NullFrame
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class NullFrame extends Frame
{
    /**
     * @return bool
     */
    public function isComplete(): bool
    {
        return true;
    }

    /**
     * @return int[]
     */
    public function getThrows(): array
    {
        return [];
    }

    /**
     * @param int $pins
     * @return Frame
     */
    public function addThrow(int $pins): Frame
    {
        return $this;
    }

    /**
     * @return int
     */
    protected function countThrows(): int
    {
        return 0;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return 0;
    }

    /**
     * @return bool
     */
    public function isSpare(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isStrike(): bool
    {
        return false;
    }
}
