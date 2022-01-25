<?php

class Personne {
    public $nom;
    public $prenom;
    private $_age;
    public function getAge(){
        return $this->_age;
    }
    public function setAge($age){
        $this->_age = $age;
    }
}
