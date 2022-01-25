<?php

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



