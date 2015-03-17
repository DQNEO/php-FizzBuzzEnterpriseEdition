<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\Fizz;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\Buzz;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\FizzBuzz;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\Number;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Integer;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Divident;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIterator;

class FizzBuzzApplication
{
    /** @var Integer */
    private $firstDivisor;

    /** @var Integer */
    private $secondDivisor;

    /** @var DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface */
    private $writer;

    public function __construct(Integer $firstDivisor, Integer $secondDivisor, WriterInterface $writer)
    {
        $this->firstDivisor = $firstDivisor;
        $this->secondDivisor = $secondDivisor;
        $this->writer = $writer;
    }

    public function run(RangeIterator $range)
    {
        foreach ($range as $n) {
            $entity = $this->getEntity(new Divident($n));
            $this->writer->writeln($entity);
        }
    }

    /**
     * @param  Divident $divident
     * @return AbstractEntity
     */
    private function getEntity(Divident $divident)
    {
        if ($divident->isDividableBy($this->firstDivisor->multiply($this->secondDivisor))) {
            return FizzBuzz::getInstance();
        } else if ($divident->isDividableBy($this->firstDivisor)) {
            return Fizz::getInstance();
        } else if ($divident->isDividableBy($this->secondDivisor)) {
            return Buzz::getInstance();
        } else {
            return new Number($divident);
        }

    }

}
