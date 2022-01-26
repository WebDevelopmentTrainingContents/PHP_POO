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

  public function getRole() {
    return $this->_role;
}
public function setRole($role) {
    $this->_role = $role;
}
    
}



/* //J'instancie ma classe avec un nouvel objet :
$utilisateur = new Utilisateur();

// Pour accéder et renseigner les attributs publiques :
$utilisateur->prenom = $_POST['prenom'];
echo $utilisateur->prenom . '<br>';

$utilisateur->nom = $_POST['nom'];
echo $utilisateur->nom . '<br>';

// Pour accéder et renseigner les attributs privés :
$utilisateur->setEmail($_POST['email']);
echo $utilisateur->getEmail()  . '<br>';

$utilisateur->setPass(crypt($_POST['password'], '$1$rasmusle$'));
echo $utilisateur->getPass()  . '<br>'; */

$administrateur = new Admin();

// Pour accéder et renseigner les attributs publiques :
$administrateur->prenom = $_POST['prenom'];
echo $administrateur->prenom . '<br>';

$administrateur->nom = $_POST['nom'];
echo $administrateur->nom . '<br>';

// Pour accéder et renseigner les attributs privés :
$administrateur->setEmail($_POST['email']);
echo $administrateur->getEmail()  . '<br>';

$administrateur->setPass(crypt($_POST['password'], '$1$rasmusle$'));
echo $administrateur->getPass()  . '<br>';

$administrateur->setRole($_POST['role']);
echo $administrateur->getRole()  . '<br>';

