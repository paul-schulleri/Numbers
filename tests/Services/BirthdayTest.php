<?php


namespace Schulleri\Services;


use PHPUnit\Framework\TestCase;

/**
 * Class BirthdayTest
 * @package Schulleri\Services
 */
class BirthdayTest extends TestCase
{
    /**
     *
     */
    public function testSetterReturnsInstanceOfBirthday()
    {
        $birth = new Birthday(strtotime('1.1.2017'));
        $setter = $birth->setDate('2.4.1983');

        $this->assertInstanceOf(Birthday::class, $setter);
    }

    /**
     *
     */
    public function testYears()
    {
        $birth = (new Birthday(strtotime('1.1.2017')))->setDate('1.4.1983');
        $this->assertEquals(34, $birth->getYears());
    }

    /**
     *
     */
    public function testSixMonthCaseAfter()
    {
        $birth = (new Birthday(strtotime('1.1.2017')))->setDate('1.12.1983');
        $this->assertEquals(34, $birth->getSixMonthCase());
    }

    /**
     *
     */
    public function testSixMonthCaseBefore()
    {
        $birth = (new Birthday(strtotime('1.1.2017')))->setDate('1.4.1983');
        $this->assertEquals(35, $birth->getSixMonthCase());
    }
}
