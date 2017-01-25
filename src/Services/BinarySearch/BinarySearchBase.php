<?php
namespace Schulleri\Services\BinarySearch;

/**
 * Class BinarySearchBase
 * @package Schulleri\Services\BinarySearch
 */
abstract class BinarySearchBase
{
    /** @var array */
    protected $list;

    /** @var  int */
    protected $executions;

    /** @var  int */
    protected $result;

    /**
     * RecursiveBinarySearch constructor.
     * @param array $list
     */
    public function __construct(array $list)
    {
        sort($list);
        $this->list = $list;
    }

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }

    /**
     * @return int
     */
    public function getExecutions(): int
    {
        return $this->executions;
    }

    /**
     *
     */
    protected function countExecutions()
    {
        ++$this->executions;
    }
}
