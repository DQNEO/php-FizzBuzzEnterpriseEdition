<?php
namespace Acme;

class FizzBuzz
{
    private $start = 1;

    private $firstDevisor = 3;
    private $secondDevisor = 5;


    public function run($max)
    {
        foreach (range($this->start, $max) as $n) {
            if ($n % $this->firstDevisor === 0 && $n % $this->secondDevisor === 0) {
                $this->output("FizzBuzz");
            } else if ($n % $this->firstDevisor === 0) {
                $this->output("Fizz");
            } else if ($n % $this->secondDevisor === 0) {
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
