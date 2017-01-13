<?php
namespace Schulleri\Services;

use OutOfBoundsException;
use Schulleri\Services\Contracts\TimeContract;

/**
 * Class Time
 * @package Schulleri\Services
 */
class Time implements TimeContract
{
    /**
     * @param int $seconds
     * @return string
     */
    public function secondsToTime(int $seconds): string
    {
        if ($seconds < 1) {
            return $this->format(0, 0, 0);
        }

        return $this->format(
            floor($seconds / 3600),
            floor($seconds % 3600 / 60),
            $seconds % 60
        );
    }

    /**
     * @param string $time
     * @return int
     * @throws OutOfBoundsException
     */
    public function timeToSeconds(string $time): int
    {
        $parsed = date_parse($time);

        if($parsed['errors']){
            throw new OutOfBoundsException('Unexpected input');
        }

        return $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
    }

    /**
     * @param $hours
     * @param $minutes
     * @param $seconds
     * @return string
     */
    private function format($hours, $minutes, $seconds): string
    {
        return sprintf('%d:%02d:%02d', $hours, $minutes, $seconds);
    }
}
