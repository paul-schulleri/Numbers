<?php
namespace Schulleri\Services;

/**
 * Class Birthday
 * @package Schulleri\Services
 */
class Birthday
{
    /** @var string */
    private $now;

    /** @var  string */
    private $birthDate;

    /**
     * Birthday constructor.
     * @param $date
     */
    public function __construct($date = null)
    {
        $this->now = $date ?: time();
    }

    /**
     * @param $datum
     * @return self
     */
    public function setDate($datum)
    {
        $this->birthDate = strtotime($datum);

        return $this;
    }

    /**
     * @return int
     */
    public function getYears(): int
    {
        return date('Y', $this->now) - date('Y', $this->birthDate);
    }

    /**
     * @return int
     */
    private function getMonthsDifference(): int
    {
        return date('n', $this->now) - date('n', $this->birthDate);
    }

    /**
     * @return int
     */
    public function getSixMonthCase(): int
    {
        return $this->getYears() + $this->sixMonthCaseRule();
    }

    /**
     * @return int
     */
    private function sixMonthCaseRule(): int
    {
        $months = $this->getMonthsDifference();

        if ($months <= 0 && $months >= -6) {
            return 1;
        }

        return 0;
    }
}
