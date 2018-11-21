<?php

namespace Tdd;

abstract class CommonTestCase extends \PHPUnit_Framework_TestCase
{
    protected $expected;
    protected $actual;

    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    protected function verify($message = null)
    {
        $this->assertEquals($this->expected, $this->actual, $message);
    }

}