<?php
namespace Acme\FizzBuzz;
class RangeIterator
{
    private $star;
    private $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function toArray()
    {
        return range($this->start, $this->end);
    }
}

