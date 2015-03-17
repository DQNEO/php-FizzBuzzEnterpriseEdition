<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;
class StdoutWriter implements WriterInterface
{
    public function write($string)
    {
        echo $string;
    }
}
