<?php
namespace Acme;

class FizzBuzz
{
    public function run($max)
    {
        foreach (range(1,$max) as $n) {
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
