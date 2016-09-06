<?php
declare (strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Application;

use DQNEO\FizzBuzzEnterpriseEdition\Logic\FizzBuzzLogicInterface;
use DQNEO\FizzBuzzEnterpriseEdition\Range\RangeIterator;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\WriterInterface;
use DQNEO\FizzBuzzEnterpriseEdition\Value\Divident;

class FizzBuzzApplication implements Runnable
{
    /** @var WriterInterface */
    private $writer;
    /**
     * @var FizzBuzzLogicInterface
     */
    private $logic;

    /**
     */
    public function __construct(FizzBuzzLogicInterface $logic, WriterInterface $writer)
    {
        $this->writer = $writer;
        $this->logic = $logic;
    }

    /**
     * @param \DQNEO\FizzBuzzEnterpriseEdition\Range\RangeIterator $range
     */
    public function run(RangeIterator $range)
    {
        foreach ($range as $n) {
            $entity = $this->logic->calculate(new Divident($n));

            $this->writer->writeln($entity->getStringValue());
        }
    }
}
