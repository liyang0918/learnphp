<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2015/9/5
 * Time: 13:06
 */
header('Content-Type:text/html;charset=utf-8');
$str = <<<XML
<?xml version='1.0' encoding='gb2312' ?>
<object>
    <book>
        <computerbook>book1</computerbook>
        <computerbook>bookbook1</computerbook>
    </book>
    <book>
        <computerbook name="bookname">book2</computerbook>
    </book>
</object>
XML;

$xml = simplexml_load_string($str);
foreach($xml->children() as $layer_one) {
    print_r($layer_one);
    echo "<br>";
    foreach($layer_one->children() as $layer_two) {
        print_r($layer_two);
        echo '<br>';
    }
    echo '22<br>';
}

$xml->book[0]->computerbook[0] = "Hello Kitty";
$xml->book[0]->computerbook[1] = "Hello Snake";
$xml->book[1]->computerbook = "Hello World";
$xml->book[1]->computerbook['name'] = "Hello Book";

$modi = $xml->asXML();
file_put_contents('6.xml', $modi);
$str = file_get_contents('6.xml');
echo $str;
?>