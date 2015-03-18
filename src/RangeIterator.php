<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;

class RangeIterator implements \Iterator
{
    private $start;
    private $end;
    private $current;

    /**
     * @param  Integer  $start
     * @param  Integer  $end
     */
    public function __construct(Integer $start, Integer $end)
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
        return new Integer($this->current);
    }

    /**
     * @return boolean
     */
    public function valid()
    {
        return $this->current <= $this->end->getValue();
    }

}

