<?php
namespace Schulleri\Services;

use PHPUnit\Framework\TestCase;

/**
 * Class FactorialTest
 * @package Schulleri\Services
 * @covers Schulleri\Services\Factorial
 */
class FactorialTest extends TestCase
{
    /**
     *
     */
    public function testFactorialGenerate()
    {
        $this->assertEquals(24, (new Factorial())->generate(4));
    }

    /**
     *
     */
    public function testFactorialGenerateForZero()
    {
        $this->assertEquals(1, (new Factorial())->generate(0));
    }

    /**
     *
     */
    public function testFactorialRange()
    {
        $this->assertEquals(
            [1, 1, 2, 6, 24, 120], (new Factorial())->generateFactorialRange(5)
        );
    }

    /**
     *
     */
    public function testFactorialRangeWith_NegativeStart()
    {
        $this->assertEquals(
            [1, 1, 2, 6, 24, 120], (new Factorial())->generateFactorialRange(5, -5)
        );
    }
}
