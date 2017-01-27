<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Interface AbstractFrameFactory
 * @package LearnCleanCode\CaseStudies\Bowling
 */
interface AbstractFrameFactory
{
    /**
     * @param int $frameNumber
     * @return Frame
     */
    public function getFrame(int $frameNumber): Frame;
}
