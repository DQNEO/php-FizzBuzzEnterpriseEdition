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
    private $output;
    /**
     * @var FizzBuzzLogicInterface
     */
    private $logic;

    /**
     */
    public function __construct(FizzBuzzLogicInterface $logic, OutputInterface $output)
    {
        $this->output = $output;
        $this->logic = $logic;
    }

    /**
     * @param \DQNEO\FizzBuzzEnterpriseEdition\Range\RangeIterator $range
     */
    public function run(RangeIterator $range)
    {
        foreach ($range as $number) {
            $entity = $this->logic->calculate(new Divident($number));

            $this->output->writeln($entity->getStringValue());
        }
    }
}
