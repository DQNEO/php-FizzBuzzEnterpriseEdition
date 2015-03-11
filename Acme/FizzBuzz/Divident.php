<?php
namespace Acme\FizzBuzz;

class Divident
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function isDividableBy($divisor)
    {
        return ($this->value % $divisor === 0);
    }

    public function getValue()
    {
        return $this->value;
    }
}
