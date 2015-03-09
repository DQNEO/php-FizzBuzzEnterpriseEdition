#!/bin/bash

diff <(php run.php 30) result30.txt
if [ $? -eq 0 ]; then
    echo ok
else
    echo not ok
    exit 1
fi

diff <(php run.php 100) result100.txt
if [ $? -eq 0 ]; then
    echo ok
else
    echo not ok
    exit 1
fi
