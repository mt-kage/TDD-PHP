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
    protected function setUp()
    {
    }

    /**
     *
     */
    protected function tearDown()
    {
    }

    /**
     * @param null $message
     */
    protected function verify($message = null)
    {
        $this->assertEquals($this->expected, $this->actual, $message);
    }
}
