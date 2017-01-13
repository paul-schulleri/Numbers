<?php
namespace Schulleri\Services\Contracts;

/**
 * Interface PrimeFactorizationContract
 * @package Schulleri\Services\Contracts
 */
interface PrimeFactorizationContract
{
    /**
     * @param int $value
     * @return array
     */
    public function getPrimeFactors(int $value): array;

    /**
     * @param int $value
     * @return bool
     */
    public function isPrimeFactor(int $value) : bool;
}
