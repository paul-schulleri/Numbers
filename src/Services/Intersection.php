<?php
namespace Schulleri\Services;


use Schulleri\Services\Contracts\IntersectionContract;

/**
 * Class Intersection
 * @package Schulleri\Services
 */
class Intersection implements IntersectionContract
{
    /** @var array */
    private $values;

    /**
     * @param int $value
     * @return IntersectionContract
     */
    public function add(int $value): IntersectionContract
    {
        $this->values[] = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getAverage(): float
    {
        if (!$this->getTotal()) {
            return (float)0;
        }

        return round($this->getTotal() / $this->getQuantity(), 2);
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return array_sum($this->values);
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return count($this->values);
    }

    /**
     * @return IntersectionContract
     */
    public function reset(): IntersectionContract
    {
        $this->values = [];
        return $this;
    }
}
