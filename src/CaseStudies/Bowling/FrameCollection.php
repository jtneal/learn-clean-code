<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class FrameCollection
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class FrameCollection implements \IteratorAggregate
{
    /**
     * @var Frame[]
     */
    private $frames = [];

    /**
     * @return FrameIterator
     */
    public function getIterator(): FrameIterator
    {
        return new FrameIterator($this);
    }

    /**
     * @param int $position
     * @return Frame
     */
    public function getFrame(int $position): Frame
    {
        return $this->frames[$position] ?? new NullFrame();
    }

    /**
     * @param Frame $frame
     */
    public function addFrame(Frame $frame)
    {
        $this->frames[] = $frame;
    }

    /**
     * @return Frame
     */
    public function getLastFrame(): Frame
    {
        return $this->getFrame($this->countFrames() - 1);
    }

    /**
     * @return int
     */
    public function countFrames(): int
    {
        return count($this->frames);
    }
}
