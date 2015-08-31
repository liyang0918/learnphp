#!/bin/bash
# Created By:      LiYang <Liyang@unknownspace.com>
# Created Time:    2015-08-31 11:39:15
# Modified Time:   2015-08-31 13:25:32


function sync()
{
    cd ./htdocs
    for filename in `ls`
    do
        if [ -f $filename ];then
            if [ ${filename::3} == "ly_" ]; then
                cmd_cp="cp -rf $filename /home/liyang/DOCS/learnphp/${filename:3}"
                echo $cmd_cp
                $cmd_cp
            fi
        fi
    done
}

function cleanup()
{
    for filename in `ls`
    do
        len=${#filename}
        if [ ${filename:$len-1:1} == "~" ]; then
            echo remove $filename
            rm -rf $filename
        fi
    done
}

cd /home/liyang/DOCS/learnphp/
if [ $# -eq 0 ]; then
    sync
fi

for i in $*
do
    case "$i" in
        'sync'|'-sync'|'--sync' )
            sync;;  
        'clean'|'-clean'|'-clean' )
            cleanup;;
    esac
done

