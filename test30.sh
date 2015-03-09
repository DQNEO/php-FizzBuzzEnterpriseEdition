#!/bin/bash

diff <(php fizzbuzz.php) result30.txt >/dev/null
if [ $? -eq 0 ]; then
    echo ok
else
    echo not ok
    exit 1
fi
