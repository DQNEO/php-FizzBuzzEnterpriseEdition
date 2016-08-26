<?php
declare(strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition;

use DQNEO\FizzBuzzEnterpriseEdition\Entity\AbstractEntity;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface;
use DQNEO\FizzBuzzEnterpriseEdition\Value\Divident;
use DQNEO\FizzBuzzEnterpriseEdition\RangeIterator;

class FizzBuzzApplication
{
    /** @var WriterInterface */
    private $writer;
    /**
     * @var FizzBuzzLogic
     */
    private $logic;

    /**
     */
    public function __construct(FizzBuzzLogic $logic, WriterInterface $writer)
    {
        $this->writer = $writer;
        $this->logic = $logic;
    }

    /**
     * @param RangeIterator $range
     */
    public function run(RangeIterator $range)
    {
        foreach ($range as $n) {
            $entity = $this->logic->calculate(new Divident($n));
            $this->writer->writeln($entity);
        }
    }
}
