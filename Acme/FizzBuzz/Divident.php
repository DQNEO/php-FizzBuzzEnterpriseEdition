<?php
namespace Acme\FizzBuzz;

class Divident
{
    private $divident;

    public function __construct($divident)
    {
        $this->divident = $divident;
    }

    public function isDividableBy($divisor)
    {
        return ($this->divident % $divisor === 0);
    }

}
