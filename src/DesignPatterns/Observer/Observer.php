<?php

namespace LearnCleanCode\DesignPatterns\Observer;

/**
 * Interface Observer
 * @package LearnCleanCode\DesignPatterns\Observer
 */
interface Observer
{
    /**
     * @param Subject $subject
     */
    public function update(Subject $subject);
}
