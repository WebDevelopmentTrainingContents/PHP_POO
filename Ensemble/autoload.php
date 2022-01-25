<?php


function Autoloader($class) { 
    include 'Classes/' . $class . '.class.php';
};
spl_autoload_register('Autoloader'); 
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

$administrateur = new Admin('admin');

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

/* $administrateur->setRole($_POST['role']); */
echo $administrateur->getRole()  . '<br>'; 

?>