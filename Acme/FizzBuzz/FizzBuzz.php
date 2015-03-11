<?php
namespace Acme\FizzBuzz;
use Acme\FizzBuzz\WriterInterface;
use Acme\FizzBuzz\Entity\AbstractEntity;
use Acme\FizzBuzz\Entity\Fizz;
use Acme\FizzBuzz\Entity\Buzz;
use Acme\FizzBuzz\Entity\FizzBuzz as FizzBuzzEntity;
use Acme\FizzBuzz\Entity\Number;
use Acme\FizzBuzz\RangeIterator;
use Acme\FizzBuzz\DataType\Integer;
use Acme\FizzBuzz\DataType\Divident;

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
            $entity = $this->getEntity(new Divident($n));
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
    private function getEntity(Divident $divident)
    {
        if ($divident->isDividableBy($this->firstDivisor->multiply($this->secondDivisor))) {
            $entity = new FizzBuzzEntity;
        } else if ($divident->isDividableBy($this->firstDivisor)) {
            $entity = new Fizz;
        } else if ($divident->isDividableBy($this->secondDivisor)) {
            $entity = new Buzz;
        } else {
            $entity = new Number($divident->getValue());
        }

        return $entity;
    }

    public function output(AbstractEntity $entity)
    {
        $this->writer->write($entity->getValue() . "\n");
    }
}
