<?php
namespace Acme;

class FizzBuzz
{
    private $start;

    private $firstDevisor;
    private $secondDevisor;

    public $buf;

    public function __construct($start, $firstDevisor, $secondDevisor, $writer)
    {
        $this->start = $start;
        $this->firstDevisor = $firstDevisor;
        $this->secondDevisor = $secondDevisor;
        $this->buf = "";
        $this->writer = $writer;
    }

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
        $this->writer->write($string);
        $this->buf .= $string;
    }
}
