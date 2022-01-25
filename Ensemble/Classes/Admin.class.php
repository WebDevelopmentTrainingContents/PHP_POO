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

class Admin extends Utilisateur {
  private $_role;

  public function __construct($role){
     $this->_role = $role;
  }

  public function getRole(){
      return $this->_role;
  }
  
}

