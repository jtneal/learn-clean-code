<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class FrameFactory
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class FrameFactory
{
    /**
     * @param int $frameNumber
     * @return Frame
     */
    public static function getFrame(int $frameNumber): Frame
    {
        return $frameNumber < 10 ? new NormalFrame() : new FinalFrame();
    }
}
