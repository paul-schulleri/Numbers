<?php
namespace Schulleri\Services;

use Schulleri\Services\Contracts\FibonacciContract;

/**
 * Class Fibonacci
 * @package Schulleri\Services
 */
class Fibonacci implements FibonacciContract
{
    /** @var array */
    private $numbers = [];

    /** @var int */
    private $start;

    /**
     * Fibonacci constructor.
     * @param int $start
     */
    public function __construct(int $start = 1)
    {
        $this->start = $start;
    }

    /**
     * @param int $max
     * @return array
     */
    public function getUntilMax(int $max): array
    {
        $this->numbers[] = $this->start;

        $count = 1;

        while ($count < $max) {
            ++$count;
            $this->numbers[] = $this->getNextNumber();
        }

        return $this->numbers;
    }

    /**
     * @param int $value
     * @return bool
     */
    public function isFibonacci(int $value): bool
    {
        return in_array(
            $value, $this->getUntilSpecific($value), true
        );
    }

    /**
     * @param int $specific
     * @return array
     */
    public function getUntilSpecific(int $specific): array
    {
        $this->numbers[] = $this->start;

        while (end($this->numbers) < $specific) {
            $this->numbers[] = $this->getNextNumber();
        }

        return $this->numbers;
    }

    /**
     * @return int
     */
    private function getLastElement(): int
    {
        return end($this->numbers);
    }

    /**
     * @return int
     */
    private function getPreviousElement(): int
    {
        end($this->numbers);
        return prev($this->numbers);
    }

    /**
     * @return int
     */
    private function getNextNumber(): int
    {
        return $this->getLastElement() + $this->getPreviousElement();
    }
}
