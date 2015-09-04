<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2015/9/4
 * Time: 10:54
 */
class SportObject {
    private $cont;
    public function __construct($cont) {
        $this->cont = $cont;
    }

    public function __toString() {
        return $this->cont;
    }
}

?>