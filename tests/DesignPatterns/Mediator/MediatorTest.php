<?php

namespace LearnCleanCode\DesignPatterns\Mediator;

/**
 * Class MediatorTest
 * @package LearnCleanCode\DesignPatterns\Mediator
 */
class MediatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Mediator
     */
    public function testMediator()
    {
        $rawData = [
            'testA1',
            'testA2',
            'testA3',
            'testB1',
            'testB2',
            'testB3'
        ];

        new FilterArrayMediator('testA', $rawData);

        $this->assertEquals(['testA1', 'testA2', 'testA3'], $rawData);

        new FilterArrayMediator('testA2', $rawData);

        $this->assertEquals(['testA2'], $rawData);
    }
}
