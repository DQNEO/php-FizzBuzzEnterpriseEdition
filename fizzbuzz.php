#!/usr/bin/env php
<?php

foreach (range(1,30) as $n) {
    if ($n % 15 === 0) {
        echo "FizzBuzz\n";
    } else if ($n % 3 === 0) {
        echo "Fizz\n";
    } else if ($n % 5 === 0) {
        echo "Buzz\n";
    } else {
        echo "$n\n";
    }
}
