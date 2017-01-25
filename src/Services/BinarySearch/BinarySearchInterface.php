<?php
namespace Schulleri\Services\BinarySearch;


use OutOfRangeException;

/**
 * Interface BinarySearchInterface
 * @package Schulleri\Services\BinarySearch
 */
interface BinarySearchInterface
{
    /**
     * RecursiveBinarySearch constructor.
     * @param array $list
     */
    public function __construct(array $list);

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
    ): BinarySearchInterface;

    /**
     * @return int
     */
    public function getResult(): int;

    /**
     * @return int
     */
    public function getExecutions(): int;
}
