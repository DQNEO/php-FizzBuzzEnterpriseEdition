<?php
namespace Acme\FizzBuzz;
use Acme\FizzBuzz\WriterInterface;
use Acme\FizzBuzz\Entity;

class FizzBuzz
{
    private $start;

    private $firstDevisor;
    private $secondDevisor;

    /** @var WiterInterface */
    private $writer;

    public function __construct($start, $firstDevisor, $secondDevisor, WriterInterface $writer)
    {
        $this->start = $start;
        $this->firstDevisor = $firstDevisor;
        $this->secondDevisor = $secondDevisor;
        $this->writer = $writer;
    }

    public function run($max)
    {
        foreach (range($this->start, $max) as $n) {
            if ($n % $this->firstDevisor === 0 && $n % $this->secondDevisor === 0) {
                $entity = new Entity("FizzBuzz");
            } else if ($n % $this->firstDevisor === 0) {
                $entity = new Entity("Fizz");
            } else if ($n % $this->secondDevisor === 0) {
                $entity = new Entity("Buzz");
            } else {
                $entity = new Entity($n);
            }

            $this->output($entity);
        }
    }

    public function output(Entity $entity)
    {
        $this->writer->write($entity->getValue() . "\n");
    }
}
