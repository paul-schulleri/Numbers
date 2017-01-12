<?php
namespace Schulleri\Services;

use PHPUnit\Framework\TestCase;

/**
 * Class FactorialTest
 * @package Schulleri\Services
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
}
