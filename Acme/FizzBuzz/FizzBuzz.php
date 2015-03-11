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
        $this->start = new Integer($start);
        $this->firstDivisor = new Integer($firstDivisor);
        $this->secondDivisor = new Integer($secondDivisor);
        $this->writer = $writer;
    }

    public function run($max)
    {
        foreach ($this->getRangeIterator($this->start, new Integer($max)) as $n) {
            $divident = new Divident($n);
            $entity = $this->getEntity($divident);
            $this->output($entity);
        }
    }

    /**
     * @param  int $start
     * @param  int $end
     * @return \Iterator
     */
    private function getRangeIterator(Integer $start, Integer $end)
    {
        return new RangeIterator($start, $end);
    }

    /**
     * @param  int $n
     * @return AbstractEntity
     */
    private function getEntity(Divident $dividentObject)
    {
        if ($dividentObject->isDividableBy($this->firstDivisor->multiply($this->secondDivisor))) {
            $entity = new FizzBuzzEntity;
        } else if ($dividentObject->isDividableBy($this->firstDivisor)) {
            $entity = new Fizz;
        } else if ($dividentObject->isDividableBy($this->secondDivisor)) {
            $entity = new Buzz;
        } else {
            $entity = new Number($dividentObject->getValue());
        }

        return $entity;
    }

    public function output($entity)
    {
        $this->writer->write($entity->getValue() . "\n");
    }
}
