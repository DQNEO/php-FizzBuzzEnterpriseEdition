<?php
namespace DQNEO\FizzBuzzEnterpriseEdition;
class Writer implements WriterInterface
{
    public function write($string)
    {
        echo $string;
    }
}
