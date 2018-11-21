<?php

namespace Tdd;

/**
 * Class CommonTestCase
 * @package Tdd
 */
abstract class CommonTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var
     */
    protected $expected;

    /**
     * @var
     */
    protected $actual;

    /**
     *
     */
    protected function setUp():void
    {
    }

    /**
     *
     */
    protected function tearDown():void
    {
    }

    /**
     * @param string $message
     */
    protected function verify(string $message = ""):void
    {
        $this->assertEquals($this->expected, $this->actual, $message);
    }
}
