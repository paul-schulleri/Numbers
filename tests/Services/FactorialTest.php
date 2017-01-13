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
}
