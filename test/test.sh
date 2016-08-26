#!/bin/bash
cd $(dirname $0)
cd ..
diff <(./bin/fizzbuzz.php 30) ./test/result30.txt
if [[ $? -eq 0 ]]; then
    echo ok
else
    echo not ok
    exit 1
fi

diff <(./bin/fizzbuzz.php 100) ./test/result100.txt
if [[ $? -eq 0 ]]; then
    echo ok
else
    echo not ok
    exit 1
fi
