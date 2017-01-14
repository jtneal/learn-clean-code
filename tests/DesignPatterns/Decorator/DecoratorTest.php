<?php

namespace LearnCleanCode\DesignPatterns\Decorator;

/**
 * Class DecoratorTest
 * @package LearnCleanCode\DesignPatterns\Decorator
 */
class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DataService
     */
    private $service;

    public function setUp()
    {
        $this->service = new DataService(['one' => 'a', 'two' => 'b', 'three' => 'c']);
    }

    /**
     * Test NoPacker
     */
    public function testNoPacker()
    {
        $this->assertEquals(['one' => 'a', 'two' => 'b', 'three' => 'c'], $this->service->renderData());
    }

    /**
     * Test JsonDataPacker
     */
    public function testJsonDataPacker()
    {
        $service = new JsonDataPacker($this->service);

        $this->assertEquals('{"one":"a","two":"b","three":"c"}', $service->renderData()['response']);
    }

    /**
     * Test XmlDataPacker
     */
    public function testXmlDataPacker()
    {
        $service = new XmlDataPacker($this->service);

        $expected  = '<?xml version="1.0"?>' . "\n";
        $expected .= '<response><one>a</one><two>b</two><three>c</three></response>' . "\n";

        $this->assertEquals($expected, $service->renderData()['response']);
    }
}
