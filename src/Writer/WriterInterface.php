<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;

interface WriterInterface
{
    public function write($string);

    public function writeln($string);
}
