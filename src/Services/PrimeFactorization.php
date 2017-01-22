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
     * @param int $value
     * @return array
     */
    public function getPrimeFactors(int $value): array
    {
        $primes = [];

        for ($candidate = 2; $value > 1; ++$candidate) {
            for (; $value % $candidate === 0; $value /= $candidate) {
                $primes[] = $candidate;
            }
        }

        return $primes;
    }

    /**
     * @param int $value
     * @return bool
     */
    public function isPrimeFactor(int $value): bool
    {
        return !(count($this->getPrimeFactors($value)) > 1);
    }

    /**
     * @param int $start
     * @param int $end
     * @return array
     */
    public function generatePrimesRange(int $end, int $start = 2): array
    {
        $range = range($start < 2 ? 2 : $start, $end);

        $primes = array_filter($range, function (int $value) {
            return $this->isPrimeFactor($value) ?: null;
        });

        return array_values($primes);
    }
}
