<?php
namespace Schulleri\Services;


use PHPUnit\Framework\TestCase;

/**
 * Class IntersectionTest
 * @package Schulleri\Services
 * @covers Schulleri\Services\Intersection
 */
class IntersectionTest extends TestCase
{

    /**
     *
     */
    public function testTotal()
    {
        $values = [5, 19, 20];
        $service = new Intersection();

        foreach ($values as $value) {
            $service->add($value);
        }

        $this->assertEquals(array_sum($values), $service->getTotal());
    }

    /**
     *
     */
    public function testQuantity()
    {
        $values = [5, 19, 20];
        $service = new Intersection();

        foreach ($values as $value) {
            $service->add($value);
        }

        $this->assertEquals(count($values), $service->getQuantity());
    }

    /**
     *
     */
    public function testAverage()
    {
        $values = [5, 19, 20];
        $average = 14.67;
        $service = new Intersection();

        foreach ($values as $value) {
            $service->add($value);
        }

        $this->assertEquals($average, $service->getAverage());
    }

    /**
     *
     */
    public function testReset()
    {
        $values = [5, 19, 20];
        $average = 0;
        $service = new Intersection();

        foreach ($values as $value) {
            $service->add($value);
        }

        $service->reset();
        $this->assertEquals($average, $service->getAverage());
    }
}
