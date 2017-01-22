<?php
namespace Schulleri\Services;

use OutOfRangeException;
use PHPUnit\Framework\TestCase;

/**
 * Class BinarySearchTest
 * @package Schulleri\Services
 * @covers Schulleri\Services\BinarySearch
 */
class BinarySearchTest extends TestCase
{
    /**
     *
     */
    public function testSearchForFirst()
    {
        $list = ['1', '4', '19', '22', '1781', '0', '66', '22', '89'];

        $needle = 4;

        $service = new BinarySearch($list);
        $result = $service->search($needle);

        $this->assertEquals($needle, $result->getResult());
    }

    /**
     *
     */
    public function testSearchForSecond()
    {
        $list = ['2', '4', '19', '22', '1781', '1', '66', '22', '89'];

        $needle = 2;

        $service = new BinarySearch($list);
        $result = $service->search($needle);

        $this->assertEquals(2, $result->getExecutions());
    }

    /**
     *
     */
    public function testSearchForLast()
    {
        $list = ['0', '1', '4', '19', '22', '22', '66', '89', '1781'];

        $needle = 1781;

        $service = new BinarySearch($list);
        $result = $service->search($needle);

        $this->assertEquals($needle, $result->getResult());
    }

    /**
     *
     */
    public function testSearchForPrevious()
    {
        $list = ['0', '1', '4', '19', '22', '22', '66', '89', '1781'];

        $needle = 89;

        $service = new BinarySearch($list);
        $result = $service->search($needle);

        $this->assertEquals(3, $result->getExecutions());
    }

    /**
     *
     */
    public function testSearchForOutOfRangeLeft()
    {
        $this->expectException(OutOfRangeException::class);

        $list = ['0', '1', '4', '19', '22', '22', '66', '89', '1781'];

        $needle = 2;

        $service = new BinarySearch($list);
        $service->search($needle);
    }

    /**
     *
     */
    public function testSearchForOutOfRangeRight()
    {
        $this->expectException(OutOfRangeException::class);

        $list = ['0', '1', '4', '19', '22', '22', '66', '89', '1781'];

        $needle = 200000000;

        $service = new BinarySearch($list);
        $service->search($needle);
    }
}
