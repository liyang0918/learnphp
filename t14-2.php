<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2015/9/4
 * Time: 10:04
 */

class SportObject{
    private $type = ' ';
    public function __get($name) {
        if (isset($this->$name)) {
            echo "$name value: ".$this->$name.'<br>';
        } else {
            echo "$name undefined, init 0"."<br>";
        }
    }

    public function __set($name, $value) {
        if (isset($this->$name)) {
            $this->$name = $value;
            echo "$name is $value".'<br>';
        } else {
            $this->$name = $value;
            echo $name." is init ".$value.'<br>';
        }
    }
}

$mm = new SportObject();
$mm->type = 'DIY';
$mm->type;
$mm->home;
$mm->home = 8;
?>