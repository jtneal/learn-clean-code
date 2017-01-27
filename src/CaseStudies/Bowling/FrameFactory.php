<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class FrameFactory
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class FrameFactory implements AbstractFrameFactory
{
    /**
     * @param int $frameNumber
     * @return Frame
     */
    public function getFrame(int $frameNumber): Frame
    {
        return $frameNumber < 10 ? new NormalFrame() : new FinalFrame();
    }
}
