<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\Entity\AbstractEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\FizzEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\BuzzEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\FizzBuzzEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Entity\NumberEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;
use DQNEO\FizzBuzzEnterpriseEdition\Value\Divident;
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
    public function __construct(IntegerValue $firstDivisor, IntegerValue $secondDivisor, WriterInterface $writer)
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
    private function getEntity(Divident $divident): AbstractEntity
    {
        if ($divident->isDivisible($this->firstDivisor->multiply($this->secondDivisor))) {
            return FizzBuzzEntity::getInstance();
        } elseif ($divident->isDivisible($this->firstDivisor)) {
            return FizzEntity::getInstance();
        } elseif ($divident->isDivisible($this->secondDivisor)) {
            return BuzzEntity::getInstance();
        } else {
            return new NumberEntity($divident);
        }
    }
}
