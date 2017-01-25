<?php
namespace Schulleri\Services\BinarySearch;

use OutOfRangeException;

/**
 * Class RecursiveBinarySearch
 * @package Schulleri\Services
 */
class RecursiveBinarySearch extends BinarySearchBase implements BinarySearchInterface
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
        $this->countExecutions();
        $left = $left ?: 0;
        $right = $right ?: count($this->list) - 1;

        if ($left > $right) {
            throw new OutOfRangeException();
        }

        $middle = ($left + $right) >> 1;

        if ($this->list[$middle] === $needle) {
            $this->result = $this->list[$middle];
            return $this;
        }

        if ($this->list[$middle] > $needle) {
            return $this->search($needle, $left, $middle - 1);
        }

        if ($this->list[$middle] < $needle) {
            return $this->search($needle, $middle + 1, $right);
        }
    }
}
