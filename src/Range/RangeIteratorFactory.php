<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Range;

use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;

/**
 *  A helper class to generate a RangeIterator
 */
class RangeIteratorFactory
{
    public static function factory(int $min, int $max): RangeIterator
    {
        return new RangeIterator(new IntegerValue($min), new IntegerValue($max));
    }
}
