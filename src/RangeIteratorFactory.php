<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\DataType\IntegerValue;

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
        return new RangeIterator(new IntegerValue($min), new IntegerValue($max));
    }
}
