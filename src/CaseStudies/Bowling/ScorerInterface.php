<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Interface ScorerInterface
 * @package LearnCleanCode\CaseStudies\Bowling
 */
interface ScorerInterface
{
    /**
     * @param FrameCollection $frames
     * @return ScorerInterface
     */
    public function setFrames(FrameCollection $frames): ScorerInterface;

    /**
     * @return int
     */
    public function getScore(): int;
}
