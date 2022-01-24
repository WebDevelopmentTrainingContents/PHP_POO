<?php

    class Véhicule {
        public $marque = "marqueVoiture";
        public $couleur;
        public $annee;
        public $plaque;
        public $motorisation;
    }

    class Moto extends Véhicule {
        public $nombreRoues = "2";
    }

    class Auto extends Véhicule {
        public $nombreRoues = "4";

    }

    $auto = new Auto;
  
    $auto->annee = date('Y');
    $auto->couleur = "rouge";
    $auto->motorisation = "diesel";
    var_dump($auto);
    /* $voiture1 = new Véhicule;
    var_dump($voiture1);
    $voiture1->annee = date('Y');
    $voiture1->couleur = "rouge";
    $voiture1->motorisation = "diesel";
    echo $voiture1->marque;
    echo 'couleur de la voiture : ' . $voiture1->couleur . '<br>';
    echo 'annee de la voiture : ' . $voiture1->annee . '<br>';
    echo 'motorisation de la voiture : ' . $voiture1->motorisation . '<br>';
    var_dump($voiture1);


    $voiture2 = new Voiture;

    echo 'couleur de la voiture 2 : ' . $voiture2->couleur . '<br>';
    echo 'annee de la voiture 2 : ' . $voiture2->annee . '<br>';
    $voiture2->motorisation = "électrique";
    echo 'motorisation de la voiture : ' . $voiture2->motorisation . '<br>';

    $voiture3 = new Voiture;
    echo 'couleur de la voiture 3 : ' . $voiture2->couleur . '<br>';
    echo 'annee de la voiture 3 : ' . $voiture2->annee . '<br>';
    $voiture3->motorisation = "essence";
    echo 'motorisation de la voiture 3 : ' . $voiture1->motorisation . '<br>';
 */

?>