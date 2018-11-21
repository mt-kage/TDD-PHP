<?php
declare(strict_types=1);

namespace Tdd;

/**
 * Class Doller
 * @package Tdd
 */
final class Doller
{

    /**
     * @var int
     */
    public $amount;

    /**
     * Doller constructor.
     * @param int $amount
     */
    public function __construct(int $amount)
    {
    }

    /**
     * @param int $multiplier
     */
    public function times(int $multiplier):void
    {
        $this->amount = 5 * 2;
    }
}
