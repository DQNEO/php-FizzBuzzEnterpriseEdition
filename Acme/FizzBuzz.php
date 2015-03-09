<?php
namespace Acme;

class FizzBuzz
{
    private $start = 1;

    public function run($max)
    {
        foreach (range($this->start, $max) as $n) {
            if ($n % 3 === 0 && $n % 5 === 0) {
                $this->output("FizzBuzz");
            } else if ($n % 3 === 0) {
                $this->output("Fizz");
            } else if ($n % 5 === 0) {
                $this->output("Buzz");
            } else {
                $this->output($n);
            }

            $this->output("\n");
        }
    }

    public function output($string)
    {
        echo $string;
    }
}
