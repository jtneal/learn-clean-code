<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class Scorer
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class Scorer implements ScorerInterface
{
    /**
     * @var FrameCollection
     */
    private $frames;

    /**
     * @param FrameCollection $frames
     * @return Scorer
     */
    public function setFrames(FrameCollection $frames): Scorer
    {
        $this->frames = $frames;

        return $this;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        $score = 0;

        foreach ($this->frames as $key => $frame) {
            $score += $frame->getTotal();
            $score += $frame->isSpare() ? $this->getSpareBonus($key + 1) : 0;
            $score += $frame->isStrike() ? $this->getStrikeBonus($key + 1) : 0;
        }

        return $score;
    }

    /**
     * @param int $index
     * @return int
     */
    private function getSpareBonus(int $index): int
    {
        return $this->frames->getFrame($index)->getThrows()[0] ?? 0;
    }

    /**
     * @param int $index
     * @return int
     */
    private function getStrikeBonus(int $index): int
    {
        $throws = $this->frames->getFrame($index)->getThrows();

        return ($throws[0] ?? 0) + ($throws[1] ?? $this->getSpareBonus($index + 1));
    }
}
