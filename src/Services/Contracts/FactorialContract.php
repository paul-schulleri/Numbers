<?php
namespace Schulleri\Services\Contracts;

/**
 * Interface FactorialContract
 * @package Schulleri\Services
 */
interface FactorialContract
{
    /**
     * @param int $value
     * @return int
     */
    public function generate(int $value): int;
}
