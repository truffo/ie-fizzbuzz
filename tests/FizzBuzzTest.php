<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * if number can be divided by 3: display **Fizz**.
     */
    public function testValueMultiple3()
    {
        $this->assertEquals('Fizz', FizzBuzz::value(3));
        $this->assertEquals('Fizz', FizzBuzz::value(6));
        $this->assertEquals('Fizz', FizzBuzz::value(9));
        $this->assertEquals('Fizz', FizzBuzz::value(-3));
        $this->assertEquals('Fizz', FizzBuzz::value(-6));
        $this->assertEquals('Fizz', FizzBuzz::value(-9));
    }

    /**
     * if number can be divided by 5: display **Buzz** ;.
     */
    public function testValueMultiple5()
    {
        $this->assertEquals('Buzz', FizzBuzz::value(5));
        $this->assertEquals('Buzz', FizzBuzz::value(10));
        $this->assertEquals('Buzz', FizzBuzz::value(20));
        $this->assertEquals('Buzz', FizzBuzz::value(-5));
        $this->assertEquals('Buzz', FizzBuzz::value(-10));
        $this->assertEquals('Buzz', FizzBuzz::value(-20));
    }

    /**
     * if number can be divided by 3 **AND** 5 : display **FizzBuzz** ;.
     */
    public function testValueMultiple3and5()
    {
        $this->assertEquals('FizzBuzz', FizzBuzz::value(0));
        $this->assertEquals('FizzBuzz', FizzBuzz::value(15));
        $this->assertEquals('FizzBuzz', FizzBuzz::value(30));
        $this->assertEquals('FizzBuzz', FizzBuzz::value(45));
        $this->assertEquals('FizzBuzz', FizzBuzz::value(-15));
        $this->assertEquals('FizzBuzz', FizzBuzz::value(-30));
        $this->assertEquals('FizzBuzz', FizzBuzz::value(-45));
    }

    /**
     * - else: display the number.
     */
    public function testValueNonMultiple3and5()
    {
        $this->assertEquals(1, FizzBuzz::value(1));
        $this->assertEquals(2, FizzBuzz::value(2));
        $this->assertEquals(17, FizzBuzz::value(17));
        $this->assertEquals(19, FizzBuzz::value(19));
        $this->assertEquals(22, FizzBuzz::value(22));
    }

    /**
     * - else: display the number. (Negative number).
     */
    public function testValueNonNegativeNumber()
    {
        $this->assertEquals(-1, FizzBuzz::value(-1));
        $this->assertEquals(-2, FizzBuzz::value(-2));
        $this->assertEquals(-17, FizzBuzz::value(-17));
        $this->assertEquals(-19, FizzBuzz::value(-19));
        $this->assertEquals(-22, FizzBuzz::value(-22));
    }
}
