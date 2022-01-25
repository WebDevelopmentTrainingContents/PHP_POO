<?php

class Utilisateur {
    //Attributs : 
    public $prenom;
    public $nom;
    private $_email;
    private $_password;
    

    //Méthodes:
    public function getEmail() {
        return $this->_email;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }
 
    public function getPass() {
        return $this->_password;
    }
    public function setPass($password) {
        $this->_password = $password;
    }
}

// Créer une nouvelle classe Administrateur qui étend la classe utilisateur :


