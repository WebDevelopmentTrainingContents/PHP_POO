
<?php

function Autoloader($class) { 
    include 'Classes/' . $class . '.class.php';
};
spl_autoload_register('Autoloader');



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
  
}

?>