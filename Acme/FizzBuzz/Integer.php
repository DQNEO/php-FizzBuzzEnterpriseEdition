<?php
namespace Acme\FizzBuzz;

class Integer
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

    public function multiply(Integer $n)
    {
        return new self($this->value * $n->getValue());
    }
}
