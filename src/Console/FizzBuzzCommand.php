<?php
declare (strict_types=1);
namespace DQNEO\FizzBuzzEnterpriseEdition\Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use DQNEO\FizzBuzzEnterpriseEdition\Application\FizzBuzzApplication;
use DQNEO\FizzBuzzEnterpriseEdition\Logic\FizzBuzzLogic;
use DQNEO\FizzBuzzEnterpriseEdition\Range\RangeIterator;
use DQNEO\FizzBuzzEnterpriseEdition\Writer\StdoutWriter;
use DQNEO\FizzBuzzEnterpriseEdition\Value\IntegerValue;
use Symfony\Component\Console\Command\Command;

class FizzBuzzCommand extends Command
{
    protected function configure()
    {
        $this->setName('fizzbuzz')
            ->setDescription('Do FizzBuzz')
            ->addArgument('to', InputArgument::REQUIRED, 'final number');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $to = $input->getArgument('to');
        $writer = new StdoutWriter;
        $logic = new FizzBuzzLogic(new IntegerValue(3), new IntegerValue(5));

        $fizzbuzz = new FizzBuzzApplication($logic, $output);
        $rangeIterator = new RangeIterator(new IntegerValue(1), new IntegerValue((int)$to));
        $fizzbuzz->run($rangeIterator);

    }
}
