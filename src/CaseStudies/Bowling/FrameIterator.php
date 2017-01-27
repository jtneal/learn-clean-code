<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class FrameIterator
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class FrameIterator implements \Iterator
{
    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var FrameCollection
     */
    private $frameCollection;

    /**
     * @param FrameCollection $frameCollection
     */
    public function __construct(FrameCollection $frameCollection)
    {
        $this->frameCollection = $frameCollection;
    }

    /**
     * @return Frame
     */
    public function current(): Frame
    {
        return $this->frameCollection->getFrame($this->position);
    }

    /**
     * Move forward to next element
     */
    public function next()
    {
        $this->position++;
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return !($this->current() instanceof NullFrame);
    }

    /**
     * Rewind the Iterator to the first element
     */
    public function rewind()
    {
        $this->position = 0;
    }
}
