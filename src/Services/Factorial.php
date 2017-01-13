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
}
