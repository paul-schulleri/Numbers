<?php
namespace Schulleri\Services\Contracts;

use OutOfBoundsException;

/**
 * Interface TimeContract
 * @package Schulleri\Services\Contracts
 */
interface TimeContract
{
    /**
     * @param int $seconds
     * @return string
     */
    public function secondsToTime(int $seconds): string;

    /**
     * @param string $time
     * @return int
     * @throws OutOfBoundsException
     */
    public function timeToSeconds(string $time): int;
}
