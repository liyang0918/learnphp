<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2015/9/5
 * Time: 12:10
 */
header("Content-Type:text/html;charset=utf-8");
$xml_1 = simplexml_load_file("5.xml");
print_r($xml_1);

$str = <<<XML
<?xml version='1.0' encoding='gb2312'?>
<Object>
    <ComputerBook>
        <title>PHP is the best!</title>
    </ComputerBook>
</Object>
XML;
$xml_2 = simplexml_load_string($str);
echo '<p>';
print_r($xml_2);

$dom = new domDocument();
$dom->loadXML($str);
$xml_3 = simplexml_import_dom($dom);
echo '<p>';
print_r($xml_3);

?>
