<?php
namespace Acme;

class FizzBuzz
{
    public function main($max)
    {
        foreach (range(1,$max) as $n) {
            if ($n % 3 === 0 && $n % 5 === 0) {
                self::output("FizzBuzz");
            } else if ($n % 3 === 0) {
                self::output("Fizz");
            } else if ($n % 5 === 0) {
                self::output("Buzz");
            } else {
                self::output($n);
            }

            self::output("\n");
        }
    }

    public function output($string)
    {
        echo $string;
    }
}
