#!/usr/bin/env php
<?php

FizzBuzz::main($argv[1]);

class FizzBuzz
{
    function main($max)
    {
        foreach (range(1,$max) as $n) {
            if ($n % 3 === 0 && $n % 5 === 0) {
                echo "FizzBuzz\n";
            } else if ($n % 3 === 0) {
                echo "Fizz\n";
            } else if ($n % 5 === 0) {
                echo "Buzz\n";
            } else {
                echo "$n\n";
            }

        }
    }
}
