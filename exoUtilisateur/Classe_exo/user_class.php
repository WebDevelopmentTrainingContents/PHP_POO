<?php

session_start();


class User {
    public $nom;
    public $prenom;
    public $theme;
    private $_email;
    private $_password;
    public function _getEmail() {
        return $this->_email;
    }
    public function _setEmail($email) {
        $this->_email = $email;
    }
    public function _getPassword() {
        return $this->_password;
    }
    public function _setPassword($password) {
        $this->_password = $password;
    }
}

$user1 = new User("");
$user1->nom = "MaMa";
$user1->prenom = "Cy";
$user1->setEmail=("cy@mail.fr"); 
$user1->setPassword=("********"); 

?>