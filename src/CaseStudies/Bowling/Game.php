<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class Game
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class Game
{
    /**
     * @var FrameCollection
     */
    private $frames;

    /**
     * @var AbstractFrameFactory
     */
    private $frameFactory;

    /**
     * @var ScorerInterface
     */
    private $scorer;

    /**
     * @param AbstractFrameFactory $frameFactory
     * @param ScorerInterface $scorer
     */
    public function __construct(AbstractFrameFactory $frameFactory, ScorerInterface $scorer)
    {
        $this->frames = new FrameCollection();
        $this->frameFactory = $frameFactory;
        $this->scorer = $scorer;
    }

    /**
     * @param int $pins
     * @return Game
     */
    public function throwBall(int $pins): Game
    {
        if (!$this->isGameComplete()) {
            $this->addFrameWhenNeeded()->frames->getLastFrame()->addThrow($pins);
        }

        return $this;
    }

    /**
     * @return bool
     */
    private function isGameComplete(): bool
    {
        return $this->frames->countFrames() === 10 && $this->frames->getLastFrame()->isComplete();
    }

    /**
     * @return Game
     */
    private function addFrameWhenNeeded(): Game
    {
        if ($this->frames->getLastFrame()->isComplete()) {
            $this->frames->addFrame($this->frameFactory->getFrame($this->frames->countFrames() + 1));
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->scorer->setFrames($this->frames)->getScore();
    }
}
