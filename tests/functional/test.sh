#!/bin/bash
cd $(dirname $0)/../..
diff <(./bin/fizzbuzz.php 30) ./tests/functional/result30.txt
if [[ $? -eq 0 ]]; then
    echo ok
else
    echo not ok
    exit 1
fi

diff <(./bin/fizzbuzz.php 100) ./tests/functional/result100.txt
if [[ $? -eq 0 ]]; then
    echo ok
else
    echo not ok
    exit 1
fi
