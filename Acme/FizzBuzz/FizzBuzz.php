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

    private $firstDivisor;
    private $secondDivisor;

    /** @var WiterInterface */
    private $writer;

    public function __construct($start, $firstDivisor, $secondDivisor, WriterInterface $writer)
    {
        $this->start = $start;
        $this->firstDivisor = $firstDivisor;
        $this->secondDivisor = $secondDivisor;
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
        if ($this->isDividable($n, $this->firstDivisor * $this->secondDivisor)) {
            $entity = new FizzBuzzEntity;
        } else if ($this->isDividable($n, $this->firstDivisor)) {
            $entity = new Fizz;
        } else if ($this->isDividable($n, $this->secondDivisor)) {
            $entity = new Buzz;
        } else {
            $entity = new Number($n);
        }

        return $entity;
    }

    private function isDividable($target, $divisor)
    {
        return ($target % $divisor === 0);
    }

    public function output($entity)
    {
        $this->writer->write($entity->getValue() . "\n");
    }
}
