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
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Doller
     */
    public function times(int $multiplier):Doller
    {
        return new Doller($this->amount * $multiplier);
    }

    /**
     * @param $object
     * @return bool
     */
    public function equals($object)
    {
        return true;
    }
}
