<?php
namespace Schulleri\Services\Contracts;

/**
 * Interface FibonacciContract
 * @package Schulleri\Services
 */
interface FibonacciContract
{
    /**
     * @param int $max
     * @return array
     */
    public function getUntilMax(int $max): array;

    /**
     * @param int $specific
     * @return array
     */
    public function getUntilSpecific(int $specific): array;

    /**
     * @param int $value
     * @return bool
     */
    public function isFibonacci(int $value) : bool;
}
