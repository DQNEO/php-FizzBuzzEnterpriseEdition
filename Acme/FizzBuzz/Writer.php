<?php
namespace Acme\FizzBuzz;
class Writer implements WriterInterface
{
    public function write($string)
    {
        echo $string;
    }
}
