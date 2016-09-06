<?php
declare (strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Application;

use DQNEO\FizzBuzzEnterpriseEdition\Logic\FizzBuzzLogicInterface;
use DQNEO\FizzBuzzEnterpriseEdition\Range\RangeIterator;
use DQNEO\FizzBuzzEnterpriseEdition\Value\Divident;
use Symfony\Component\Console\Output\OutputInterface;

class FizzBuzzApplication implements Runnable
{
    /** @var OutputInterface */
    private $writer;
    /**
     * @var FizzBuzzLogicInterface
     */
    private $logic;

    /**
     */
    public function __construct(FizzBuzzLogicInterface $logic, OutputInterface $writer)
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
