<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\Fizz;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\Buzz;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\FizzBuzz;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\Number;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\IntegerEntity;
use DQNEO\FizzBuzzEnterpriseEdition\DataType\Divident;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIterator;

class FizzBuzzApplication
{
    /** @var Integer */
    private $firstDivisor;

    /** @var Integer */
    private $secondDivisor;

    /** @var WriterInterface */
    private $writer;

    /**
     * @param Integer $firstDivisor
     * @param Integer $secondDivisor
     * @param WriterInterface $writer
     * @return void
     */
    public function __construct(IntegerEntity $firstDivisor, IntegerEntity $secondDivisor, WriterInterface $writer)
    {
        $this->firstDivisor = $firstDivisor;
        $this->secondDivisor = $secondDivisor;
        $this->writer = $writer;
    }

    /**
     * @param RangeIterator $range
     * @return void
     */
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
        if ($divident->isDivisible($this->firstDivisor->multiply($this->secondDivisor))) {
            return FizzBuzz::getInstance();
        } elseif ($divident->isDivisible($this->firstDivisor)) {
            return Fizz::getInstance();
        } elseif ($divident->isDivisible($this->secondDivisor)) {
            return Buzz::getInstance();
        } else {
            return new Number($divident);
        }
    }
}
