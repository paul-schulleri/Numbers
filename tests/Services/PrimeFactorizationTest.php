<?php
namespace Schulleri\Services;

use PHPUnit\Framework\TestCase;

/**
 * Class PrimeFactorizationTest
 * @package Schulleri\Services
 * @covers Schulleri\Services\PrimeFactorization
 */
class PrimeFactorizationTest extends TestCase
{
    /**
     *
     */
    public function testGeneratesPrimeFactorsForPrimeFactor()
    {
        $numbers = (new PrimeFactorization())->getPrimeFactors(8);

        $this->assertEquals([2, 2, 2], $numbers);
    }

    /**
     *
     */
    public function testGeneratesPrimeFactorsForNonPrimeFactor()
    {
        $numbers = (new PrimeFactorization())->getPrimeFactors(7);

        $this->assertEquals([7], $numbers);
    }

    /**
     *
     */
    public function testIsPrimeFactorTrue()
    {
        $this->assertTrue(
            (new PrimeFactorization())->isPrimeFactor(7)
        );
    }

    /**
     *
     */
    public function testIsPrimeFactorFalse()
    {
        $this->assertFalse(
            (new PrimeFactorization())->isPrimeFactor(8)
        );
    }
}


