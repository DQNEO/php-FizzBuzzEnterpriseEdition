#!/bin/bash
cd $(dirname $0)
cd ..
diff <(php ./bin/run.php 30) ./test/result30.txt
if [ $? -eq 0 ]; then
    echo ok
else
    echo not ok
    exit 1
fi

diff <(php ./bin/run.php 100) ./test/result100.txt
if [ $? -eq 0 ]; then
    echo ok
else
    echo not ok
    exit 1
fi
