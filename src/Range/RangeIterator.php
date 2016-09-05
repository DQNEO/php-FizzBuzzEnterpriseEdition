<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Range;

use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;

class RangeIterator implements \Iterator
{
    private $start;
    private $end;
    private $current;

    public function __construct(IntegerValue $start, IntegerValue $end)
    {
        $this->start = $start;
        $this->end = $end;
        $this->current = $this->start->getValue();
    }

    /**
     * @return integer
     */
    public function rewind()
    {
        $this->current = $this->start->getValue();
    }

    /**
     * @return integer
     */
    public function next()
    {
        $this->current++;
    }

    /**
     * @return integer
     */
    public function key()
    {
        return $this->current;
    }

    /**
     * @return Integer
     */
    public function current()
    {
        return new IntegerValue($this->current);
    }

    /**
     * @return boolean
     */
    public function valid()
    {
        return $this->current <= $this->end->getValue();
    }
}
