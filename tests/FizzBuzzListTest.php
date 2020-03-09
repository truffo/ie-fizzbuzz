<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FizzBuzzListTest extends TestCase
{
    public function testString15()
    {
        $fizzBuzzList = new FizzBuzzList(5);
        $result = $fizzBuzzList->__toString();
        $this->assertEquals('1 2 Fizz 4 Buzz', $result);
    }

    public function testString1M5()
    {
        $fizzBuzzList = new FizzBuzzList(-5);
        $result = $fizzBuzzList->__toString();
        $this->assertEquals('1 FizzBuzz -1 -2 Fizz -4 Buzz', $result);
    }
}
