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

//J'instancie ma classe avec un nouvel objet :
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
echo $utilisateur->getPass()  . '<br>';