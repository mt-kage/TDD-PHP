<?php
declare(strict_types=1);

namespace Tdd;

/**
 * Class MoneyTest
 * @package Tdd
 */
final class MoneyTest extends CommonTestCase
{
    /**
     *
     */
    protected function setUp():void
    {
        parent::setUp();
    }

    /**
     *
     */
    protected function tearDown():void
    {
        parent::tearDown();
    }

    /**
     *
     */
    public function testMultiplication():void
    {
        $five = new Doller(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(2);
        $this->assertEquals(15, $product->amount);
    }
}
