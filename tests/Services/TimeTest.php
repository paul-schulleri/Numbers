<?php
namespace Schulleri\Services;

use OutOfBoundsException;
use PHPUnit\Framework\TestCase;

/**
 * Class TimeTest
 * @package Schulleri\Services
 * @covers Schulleri\Services\Time
 */
class TimeTest extends TestCase
{
    /**
     *
     */
    public function testCanConvertSecondsToTime()
    {
        $this->assertEquals(
            '2:01:05', (new Time())->secondsToTime(120 * 60 + 60 + 5)
        );
    }

    /**
     *
     */
    public function testCanConvertSecondsToTime_MinusSeconds()
    {
        $this->assertEquals(
            '0:00:00', (new Time())->secondsToTime(-91)
        );
    }

    /**
     *
     */
    public function testCanConvertTimeToSeconds()
    {
        $this->assertEquals(
            120 * 60 + 60 + 5, (new Time())->timeToSeconds('2:01:05')
        );
    }

    /**
     *
     */
    public function testTimeToSecondsFailsForWrongFormat()
    {
        $this->expectException(OutOfBoundsException::class);
        (new Time())->timeToSeconds('--wrong-format--');
    }
}
