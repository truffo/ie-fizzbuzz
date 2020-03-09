<?php

declare(strict_types=1);

/**
 * Generate FizzBuzz value for a number.
 */
class FizzBuzz
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public static function value(int $n): string
    {
        switch (true) {
            case self::isDivisibleBy($n, 15): return self::FIZZ.self::BUZZ;
            case self::isDivisibleBy($n, 3): return self::FIZZ;
            case self::isDivisibleBy($n, 5): return self::BUZZ;
            default: return (string) $n;
        }
    }

    private static function isDivisibleBy(int $x, int $n)
    {
        return 0 === $x % $n;
    }
}
