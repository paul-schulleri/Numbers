<?php
namespace Schulleri\Services\BinarySearch;

use OutOfRangeException;

/**
 * Class IterativeBinarySearch
 * @package Schulleri\Services\BinarySearch
 */
class IterativeBinarySearch extends BinarySearchBase implements BinarySearchInterface
{
    /**
     * @param string $needle
     * @param $left
     * @param $right
     * @return BinarySearchInterface
     * @throws OutOfRangeException
     */
    public function search(
        string $needle,
        int $left = null,
        int $right = null
    ): BinarySearchInterface {
        $left = $left ?: 0;
        $right = $right ?: count($this->list) - 1;

        $this->result = $this->evaluate($needle, $left, $right);

        return $this;
    }

    /**
     * @param string $needle
     * @param int $left
     * @param int $right
     * @return int
     * @throws OutOfRangeException
     */
    private function evaluate(string $needle, int $left, int $right): int
    {
        while ($left <= $right) {
            $this->countExecutions();

            $middle = ($left + $right) >> 1;

            if ($this->list[$middle] === $needle) {
                return $this->list[$middle];
            }

            if ($this->list[$middle] > $needle) {
                $right = $middle - 1;
            } elseif ($this->list[$middle] < $needle) {
                $left = $middle + 1;
            }
        }

        throw new OutOfRangeException();
    }
}
