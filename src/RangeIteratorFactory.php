<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\DataType\IntegerEntity;

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
        return new RangeIterator(new IntegerEntity($min), new IntegerEntity($max));
    }
}
