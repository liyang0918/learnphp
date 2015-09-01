#!/bin/bash
# Created By:      LiYang <Liyang@unknownspace.com>
# Created Time:    2015-09-01 11:41:02
# Modified Time:   2015-09-01 11:58:01

if [ $# -eq 0 ]; then
    exit 1
fi

for i in $*
do
    while [[ ${i:0:1} == "-" ]]
    do
       i=${i/#"-"/""}
    done
    echo $i
done
