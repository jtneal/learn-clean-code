<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class NormalFrame
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class NormalFrame extends Frame
{
    /**
     * @return bool
     */
    public function isComplete(): bool
    {
        return $this->countThrows() === 2 || $this->isStrike();
    }
}
