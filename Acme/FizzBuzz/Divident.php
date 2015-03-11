<?php
namespace Acme\FizzBuzz;

class Divident extends Integer
{
    public function isDividableBy(Integer $divisor)
    {
        return ($this->value % $divisor->getValue() === 0);
    }
}
