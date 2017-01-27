<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class Frame
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class Frame
{
    /**
     * @var int[]
     */
    private $throws = [];

    /**
     * @return int[]
     */
    public function getThrows(): array
    {
        return $this->throws;
    }

    /**
     * @param int $pins
     * @return Frame
     */
    public function addThrow(int $pins): Frame
    {
        $this->throws[] = $pins;

        return $this;
    }

    /**
     * @return int
     */
    protected function countThrows(): int
    {
        return count($this->getThrows());
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return array_sum($this->getThrows());
    }

    /**
     * @return bool
     */
    public function isSpare(): bool
    {
        return $this->countThrows() === 2 && $this->getTotal() === 10;
    }

    /**
     * @return bool
     */
    public function isStrike(): bool
    {
        return $this->countThrows() === 1 && $this->getTotal() === 10;
    }

    /**
     * @return bool
     */
    public function isComplete(): bool
    {
        return $this->countThrows() === 2 || $this->isStrike();
    }
}
