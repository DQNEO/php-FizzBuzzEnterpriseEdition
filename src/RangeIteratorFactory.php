<?php
namespace Acme\FizzBuzz;
use Acme\FizzBuzz\DataType\Integer;

/**
 *  A helper class to generate a RangeIterator
 */
class RangeIteratorFactory
{
    /**
     *  @param int $min
     *  @param int $max
     */
    public static function factory($min, $max)
    {
        return new RangeIterator(new Integer($min), new Integer($max));
    }
}
