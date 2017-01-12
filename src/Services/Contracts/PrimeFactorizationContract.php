<?php
namespace Schulleri\Services\Contracts;

/**
 * Interface PrimeFactorizationContract
 * @package Schulleri\Services\Contracts
 */
interface PrimeFactorizationContract
{
    /**
     * @param int $number
     * @return array
     */
    public function getPrimeFactors(int $number): array;

    /**
     * @param int $value
     * @return bool
     */
    public function isPrimeFactor(int $value) : bool;
}
