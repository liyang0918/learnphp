<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2015/9/4
 * Time: 10:56
 */
function __autoload($class_name) {
    $class_path = $class_name.'.class.php';
    if (file_exists($class_path)) {
        include_once($class_path);
    } else
        echo 'Class name error!';
}

$mybook = new SportObject("江山代有才人出, 各领风骚数百年.");
echo $mybook;