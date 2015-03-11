<?php
namespace Acme\FizzBuzz;
use Acme\FizzBuzz\WriterInterface;
use Acme\FizzBuzz\Entity\Fizz;
use Acme\FizzBuzz\Entity\Buzz;
use Acme\FizzBuzz\Entity\FizzBuzz as FizzBuzzEntity;
use Acme\FizzBuzz\Entity\Number;
use Acme\FizzBuzz\RangeIterator;

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
        foreach ($this->getRangeIterator($this->start, $max) as $n) {
            $entity = $this->getEntity($n);
            $this->output($entity);
        }
    }

    /**
     * @param  int $start
     * @param  int $end
     * @return \Iterator
     */
    private function getRangeIterator($start, $end)
    {
        return new RangeIterator($start, $end);
    }

    /**
     * @param  int $n
     * @return AbstractEntity
     */
    private function getEntity($n)
    {
        if ($this->isDevisable($n, $this->firstDevisor * $this->secondDevisor)) {
            $entity = new FizzBuzzEntity;
        } else if ($this->isDevisable($n, $this->firstDevisor)) {
            $entity = new Fizz;
        } else if ($this->isDevisable($n, $this->secondDevisor)) {
            $entity = new Buzz;
        } else {
            $entity = new Number($n);
        }

        return $entity;
    }

    private function isDevisable($target, $devisor)
    {
        return ($target % $devisor === 0);
    }

    public function output($entity)
    {
        $this->writer->write($entity->getValue() . "\n");
    }
}
