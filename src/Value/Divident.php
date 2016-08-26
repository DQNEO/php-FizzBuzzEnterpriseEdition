<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Value;

class Divident extends IntegerValue
{
    public function __construct(IntegerValue $divisor)
    {
        $this->value = $divisor->getValue();
    }

    public function isDivisible(IntegerValue $divisor)
    {
        return ($this->value % $divisor->getValue() === 0);
    }
}