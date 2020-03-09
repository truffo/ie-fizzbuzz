<?php

/**
 * Generate string for FizzBuzz value between 1 and n.
 */
class FizzBuzzList
{
    /**
     * @var int
     */
    private $start;

    /**
     * @var int
     */
    private $end;

    public function __construct(int $n)
    {
        $this->start = 1;
        $this->end = $n;
    }

    public function __toString()
    {
        $result = '';
        if ($this->start < $this->end) {
            for ($i = $this->start; $i <= $this->end; ++$i) {
                $result .= FizzBuzz::value($i).' ';
            }
        } else {
            for ($i = $this->start; $i >= $this->end; --$i) {
                $result .= FizzBuzz::value($i).' ';
            }
        }

        return rtrim($result);
    }
}
