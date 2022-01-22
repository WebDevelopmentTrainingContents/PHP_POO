<?php

class Test {
    public $nom;
    private $_age;
    public function getAge() {
        return $this->_age;
    }
    public function setAge($age) {
        $this->_age = $age;
    }
}


?>