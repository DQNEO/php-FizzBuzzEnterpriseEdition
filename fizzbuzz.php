#!/usr/bin/env php
<?php

foreach (range(1,30) as $n) {
    if ($n % 3 === 0) {
        echo "Fizz\n";
    } else {
        echo "$n\n";
    }
}
