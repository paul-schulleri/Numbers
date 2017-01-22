<?php
namespace Schulleri\Services;

use OutOfRangeException;

/**
 * Class BinarySearch
 * @package Schulleri\Services
 */
class BinarySearch
{
    /** @var array */
    private $list;

    /** @var  int */
    private $executions;

    /** @var  int */
    private $result;

    /**
     * BinarySearch constructor.
     * @param array $list
     */
    public function __construct(array $list)
    {
        sort($list);
        $this->list = $list;
    }

    /**
     * @param string $needle
     * @param $left
     * @param $right
     * @return self
     * @throws OutOfRangeException
     */
    public function search(string $needle, int $left = null, int $right = null): self
    {
        $this->countExecutions();
        $left = $left ?: 0;
        $right = $right ?: count($this->list) - 1;

        $mid = ($left + $right) >> 1;

        if ($this->list[$mid] === $needle) {
            $this->result = $this->list[$mid];
            return $this;
        }

        if ($this->executions > count($this->list)) {
            throw new OutOfRangeException();
        }

        if ($this->list[$mid] > $needle) {
            return $this->search($needle, $left, $mid - 1);
        }

        if ($this->list[$mid] < $needle) {
            return $this->search($needle, $mid + 1, $right);
        }
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
    private function countExecutions()
    {
        ++$this->executions;
    }
}
