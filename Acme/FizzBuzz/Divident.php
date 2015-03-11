<?php
namespace Acme\FizzBuzz;

class Divident extends Integer
{
    public function isDividableBy($divisor)
    {
        return ($this->value % $divisor === 0);
    }
}
