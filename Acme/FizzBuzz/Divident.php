<?php
namespace Acme\FizzBuzz;

class Divident extends Integer
{
    public function __construct(Integer $divisor)
    {
        $this->value = $divisor->getValue();
    }

    public function isDividableBy(Integer $divisor)
    {
        return ($this->value % $divisor->getValue() === 0);
    }
}
