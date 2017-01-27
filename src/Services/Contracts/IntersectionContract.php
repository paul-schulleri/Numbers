<?php
namespace Schulleri\Services\Contracts;


/**
 * Interface IntersectionContract
 * @package Schulleri\Services\Contracts
 */
interface IntersectionContract
{
    /**
     * @param int $value
     * @return IntersectionContract
     */
    public function add(int $value): IntersectionContract;

    /**
     * @return float
     */
    public function getAverage(): float;

    /**
     * @return int
     */
    public function getTotal(): int;

    /**
     * @return int
     */
    public function getQuantity(): int;

    /**
     * @return IntersectionContract
     */
    public function reset(): IntersectionContract;
}
