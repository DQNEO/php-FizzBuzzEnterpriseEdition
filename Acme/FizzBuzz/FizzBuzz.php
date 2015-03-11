<?php
namespace Acme\FizzBuzz;
use Acme\FizzBuzz\WriterInterface;
use Acme\FizzBuzz\Entity\AbstractEntity;
use Acme\FizzBuzz\Entity\Fizz;
use Acme\FizzBuzz\Entity\Buzz;
use Acme\FizzBuzz\Entity\FizzBuzz as FizzBuzzEntity;
use Acme\FizzBuzz\Entity\Number;

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
            $entity = $this->getEntity($n);
            $this->output($entity);
        }
    }

    /**
     * @param  int $n
     * @return AbstractEntity $entity
     */
    private function getEntity($n)
    {
        if ($n % $this->firstDevisor === 0 && $n % $this->secondDevisor === 0) {
            $entity = new FizzBuzzEntity;
        } else if ($n % $this->firstDevisor === 0) {
            $entity = new Fizz;
        } else if ($n % $this->secondDevisor === 0) {
            $entity = new Buzz;
        } else {
            $entity = new Number($n);
        }

        return $entity;
    }

    public function output($entity)
    {
        $this->writer->write($entity->getValue() . "\n");
    }
}
