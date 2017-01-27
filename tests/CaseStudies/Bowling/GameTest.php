<?php

namespace LearnCleanCode\CaseStudies\Bowling;

/**
 * Class GameTest
 * @package LearnCleanCode\CaseStudies\Bowling
 */
class GameTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Game
     */
    private $game;

    public function setUp()
    {
        $this->game = new Game(new Scorer());
    }

    /**
     * Test SingleFrame
     */
    public function testSingleFrame()
    {
        $this->game->throwBall(5);
        $this->game->throwBall(1);

        $this->assertEquals(6, $this->game->getScore());
    }

    /**
     * Test Spare
     */
    public function testSpare()
    {
        $this->game->throwBall(5);
        $this->game->throwBall(5);
        $this->game->throwBall(4);
        $this->game->throwBall(2);

        $this->assertEquals(20, $this->game->getScore());
    }

    /**
     * Test Strike
     */
    public function testStrike()
    {
        $this->game->throwBall(10);
        $this->game->throwBall(5);
        $this->game->throwBall(4);

        $this->assertEquals(28, $this->game->getScore());
    }

    /**
     * Test Perfect Game
     */
    public function testPerfectGame()
    {
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);

        $this->assertEquals(300, $this->game->getScore());
    }

    /**
     * Test Full Game
     */
    public function testFullGame()
    {
        $this->game->throwBall(10);
        $this->game->throwBall(7);
        $this->game->throwBall(3);
        $this->game->throwBall(9);
        $this->game->throwBall(0);
        $this->game->throwBall(10);
        $this->game->throwBall(0);
        $this->game->throwBall(8);
        $this->game->throwBall(8);
        $this->game->throwBall(2);
        $this->game->throwBall(0);
        $this->game->throwBall(6);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(8);
        $this->game->throwBall(1);

        $this->assertEquals(167, $this->game->getScore());
    }

    /**
     * Test Bad Game
     */
    public function testBadGame()
    {
        $this->game->throwBall(9);
        $this->game->throwBall(0);
        $this->game->throwBall(8);
        $this->game->throwBall(1);
        $this->game->throwBall(7);
        $this->game->throwBall(2);
        $this->game->throwBall(6);
        $this->game->throwBall(3);
        $this->game->throwBall(5);
        $this->game->throwBall(4);
        $this->game->throwBall(4);
        $this->game->throwBall(5);
        $this->game->throwBall(3);
        $this->game->throwBall(6);
        $this->game->throwBall(2);
        $this->game->throwBall(7);
        $this->game->throwBall(1);
        $this->game->throwBall(8);
        $this->game->throwBall(0);
        $this->game->throwBall(9);

        $this->assertEquals(90, $this->game->getScore());
    }

    /**
     * Test Too Many Throws
     */
    public function testTooManyThrows()
    {
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);
        $this->game->throwBall(10);

        $this->assertEquals(300, $this->game->getScore());
    }
}
