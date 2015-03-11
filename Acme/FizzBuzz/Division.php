<?php
namespace Acme\FizzBuzz;

class Division
{
    private $divident;
    private $divisor;

    public function __construct($divident, $divisor)
    {
        $this->divident = $divident;
        $this->divisor = $divisor;
    }

    public function isDividable()
    {
        return ($this->divident % $this->divisor === 0);
    }

}
