<?php
namespace Acme;

class FizzBuzz
{
    private $start = 1;

    public function run($max)
    {
        $firstDevisor = 3;
        $secondDevisor = 5;

        foreach (range($this->start, $max) as $n) {
            if ($n % $firstDevisor === 0 && $n % $secondDevisor === 0) {
                $this->output("FizzBuzz");
            } else if ($n % $firstDevisor === 0) {
                $this->output("Fizz");
            } else if ($n % $secondDevisor === 0) {
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
