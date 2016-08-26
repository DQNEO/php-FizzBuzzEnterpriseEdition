<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Value;

class IntegerValue
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function multiply(IntegerValue $n)
    {
        return new self($this->value * $n->getValue());
    }
}
