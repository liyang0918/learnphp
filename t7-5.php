<?php
$arr = array("mn","mm","nm","mm","nn","nnm");
$match = array_search("nnm", $arr);
echo $match."<br />";

$arr_new = array();
while($a = array_pop($arr)) {
    print_r($arr);
    array_push($arr_new, $a);
    print_r($arr_new);
    echo $a."<br />";
}

?>
