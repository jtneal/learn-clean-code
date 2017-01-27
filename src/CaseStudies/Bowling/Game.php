<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class Game
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class Game
{
    /**
     * @var Frame[]
     */
    private $frames;

    /**
     * @var ScorerInterface
     */
    private $scorer;

    /**
     * @param ScorerInterface $scorer
     */
    public function __construct(ScorerInterface $scorer)
    {
        $this->scorer = $scorer;
    }

    /**
     * @param int $pins
     * @return Game
     */
    public function throwBall(int $pins): Game
    {
        if (!$this->isGameComplete()) {
            $this->addFrameWhenNeeded()->getActiveFrame()->addThrow($pins);
        }

        return $this;
    }

    /**
     * @return bool
     */
    private function isGameComplete(): bool
    {
        return $this->countFrames() === 10 && $this->getFrame(10)->isComplete();
    }

    /**
     * @return int
     */
    private function countFrames(): int
    {
        return count($this->frames);
    }

    /**
     * @param int $frame
     * @return Frame
     */
    private function getFrame(int $frame): Frame
    {
        return $this->frames[$frame - 1];
    }

    /**
     * @return Frame
     */
    private function getActiveFrame(): Frame
    {
        return $this->getFrame($this->countFrames());
    }

    /**
     * @return Game
     */
    private function addFrameWhenNeeded(): Game
    {
        if ($this->isNewFrameNeeded()) {
            $this->frames[] = FrameFactory::getFrame($this->countFrames() + 1);
        }

        return $this;
    }

    /**
     * @return bool
     */
    private function isNewFrameNeeded(): bool
    {
        return $this->countFrames() === 0 || $this->getActiveFrame()->isComplete();
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->scorer->setFrames($this->frames)->getScore();
    }
}
