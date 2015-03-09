<?php
namespace Acme;

class FizzBuzz
{
    function main($max)
    {
        foreach (range(1,$max) as $n) {
            if ($n % 3 === 0 && $n % 5 === 0) {
                echo "FizzBuzz";
            } else if ($n % 3 === 0) {
                echo "Fizz";
            } else if ($n % 5 === 0) {
                echo "Buzz";
            } else {
                echo $n;
            }

            echo "\n";
        }
    }
}
