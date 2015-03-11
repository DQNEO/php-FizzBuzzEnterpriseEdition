<?php
namespace Acme\FizzBuzz;

class RangeIterator implements \Iterator
{
    private $start;
    private $end;
    private $current;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
        $this->current = $this->start;
    }

    public function rewind()
    {
        $this->current = $this->start;
    }

    public function next()
    {
        $this->current++;
    }

    public function key()
    {
        return $this->current;
    }

    public function current()
    {
        return $this->current;
    }

    public function valid()
    {
        return $this->current <= $this->end;
    }

}

