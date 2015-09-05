<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2015/9/5
 * Time: 13:52
 */
$dom = new DOMDocument('1.0', 'gb2312');
$object = $dom->createElement('object');
$dom->appendChild($object);
$book = $dom->createElement('book');
$object->appendChild($book);
$computerbook = $dom->createElement('computerbook');
$book->appendChild($computerbook);
$type = $dom->createAttribute('type');
$computerbook->appendChild($type);
$type_value = $dom->createTextNode('computer');
$type->appendChild($type_value);
$bookname = $dom->createElement('bookname');
$computerbook->appendChild($bookname);
$bookname_value = $dom->createTextNode('Learn PHP');
$bookname->appendChild($bookname_value);

echo $dom->saveXML();
?>