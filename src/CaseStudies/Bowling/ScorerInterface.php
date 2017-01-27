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
     * @return Scorer
     */
    public function setFrames(FrameCollection $frames): Scorer;

    /**
     * @return int
     */
    public function getScore(): int;
}
