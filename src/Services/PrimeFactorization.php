<?php
namespace Schulleri\Services;

use Schulleri\Services\Contracts\PrimeFactorizationContract;

/**
 * Class PrimeFactorization
 * @package Schulleri\Services
 */
class PrimeFactorization implements PrimeFactorizationContract
{
    /**
     * @param int $number
     * @return array
     */
    public function getPrimeFactors(int $number): array
    {
        $primes = [];

        for($candidate = 2; $number > 1; ++$candidate) {
            for (; $number % $candidate === 0; $number /= $candidate) {
                $primes[] = $candidate;
            }
        }

        if ($number > 1) {
            $primes[] = $number;
        }

        return $primes;
    }

    /**
     * @param int $value
     * @return bool
     */
    public function isPrimeFactor(int $value) : bool
    {
        return !count($this->getPrimeFactors($value)) > 1;
    }
}
