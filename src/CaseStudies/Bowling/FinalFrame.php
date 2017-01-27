<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class FinalFrame
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class FinalFrame extends Frame
{
    /**
     * @return bool
     */
    public function isComplete(): bool
    {
        return $this->countThrows() === 3 || ($this->countThrows() === 2 && $this->getTotal() < 10);
    }
}
