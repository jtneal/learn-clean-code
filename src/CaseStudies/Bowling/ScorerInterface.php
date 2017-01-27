<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Interface ScorerInterface
 * @package LearnCleanCode\CaseStudies\Bowling
 */
interface ScorerInterface
{
    /**
     * @param array $frames
     * @return Scorer
     */
    public function setFrames(array $frames): Scorer;

    /**
     * @return int
     */
    public function getScore(): int;
}
