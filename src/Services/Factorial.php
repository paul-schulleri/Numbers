<?php
namespace Schulleri\Services;

use Schulleri\Services\Contracts\FactorialContract;

/**
 * Class Factorial
 * @package Schulleri\Services
 */
class Factorial implements FactorialContract
{
    /**
     * @param int $value
     * @return int
     */
    public function generate(int $value): int
    {
        if ($value <= 1) {
            return 1;
        }

        for ($faculty = 1; $value > 1; --$value) {
            $faculty *= $value;
        }

        return $faculty;
    }

    /**
     * @param int $start
     * @param int $end
     * @return array
     */
    public function generateFactorialRange(int $end, int $start = 0): array
    {
        $range = range($start > 0 ?: 0, $end);

        $primes = array_map(function (int $value): int {
            return $this->generate($value);
        }, $range);

        return array_values($primes);
    }
}
