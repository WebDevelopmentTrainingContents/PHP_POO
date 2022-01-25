<?php

/* include('Classes/Voiture.class.php');
include('Classes/Personne.class.php'); */

// En alternative, on peut utiliser l'autoload :
// On peut appeler la fonction native PHP qui va tenter automatiquement de trouver le fichier Voiture.php par exemple :
function Autoloader($class) { 
    include 'Classes/' . $class . '.class.php';
};
spl_autoload_register('Autoloader'); 



$voiture = new Voiture();

echo $voiture->couleur;

echo '<br>';




$personne = new Personne();

$personne->setAge(22);
echo $personne->getAge();

