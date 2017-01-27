<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class Scorer
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class Scorer implements ScorerInterface
{
    /**
     * @var Frame[]
     */
    private $frames;

    /**
     * @param array $frames
     * @return Scorer
     */
    public function setFrames(array $frames): Scorer
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
        return isset($this->frames[$index]) ? $this->frames[$index]->getThrows()[0] : 0;
    }

    /**
     * @param int $index
     * @return int
     */
    private function getStrikeBonus(int $index): int
    {
        $bonus = 0;

        if (isset($this->frames[$index])) {
            $throws = $this->frames[$index]->getThrows();
            $bonus += $throws[0] + ($throws[1] ?? $this->getSpareBonus($index + 1));
        }

        return $bonus;
    }
}
