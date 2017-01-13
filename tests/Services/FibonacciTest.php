<?php
namespace Schulleri\Services;

use PHPUnit\Framework\TestCase;

/**
 * Class FibonacciTest
 * @package Schulleri\Services
 * @covers Schulleri\Services\Fibonacci
 */
class FibonacciTest extends TestCase
{
    /**
     *
     */
    public function testGeneratesFibonacciMax()
    {
        $numbers = (new Fibonacci())->getUntilMax(7);

        $this->assertEquals([1, 1, 2, 3, 5, 8, 13], $numbers);
    }

    /**
     *
     */
    public function testGeneratesFibonacciSpecific()
    {
        $numbers = (new Fibonacci())->getUntilSpecific(13);

        $this->assertEquals([1, 1, 2, 3, 5, 8, 13], $numbers);
    }

    /**
     *
     */
    public function testIsFibonacciTrue()
    {
        $this->assertTrue(
            (new Fibonacci())->isFibonacci(8)
        );
    }

    /**
     *
     */
    public function testIsFibonacciFalse()
    {
        $this->assertFalse(
            (new Fibonacci())->isFibonacci(9)
        );
    }
}
