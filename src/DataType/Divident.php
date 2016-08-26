<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\DataType;

class Divident extends IntegerEntity
{
    public function __construct(IntegerEntity $divisor)
    {
        $this->value = $divisor->getValue();
    }

    public function isDivisible(IntegerEntity $divisor)
    {
        return ($this->value % $divisor->getValue() === 0);
    }
}
