<?php

class Personne {
    //Attributs : 
    public $prenom;
    public $nom;
    private $_age;
    private $_travail;

    //Méthodes:
    public function getAge() {
        return $this->_age;
    }
    public function setAge($age) {
        $this->_age = $age;
    }
 
    public function getTravail() {
        return $this->_travail;
    }
    public function setTravail($travail) {
        $this->_travail = $travail;
    }
}

//J'instancie ma classe avec un nouvel objet :
$utilisateur = new Personne();

// Pour accéder et renseigner les attributs publiques :
$utilisateur->prenom = 'Elo';
echo $utilisateur->prenom . '<br>';

$utilisateur->nom = 'Pomme';
echo $utilisateur->nom . '<br>';

// Pour accéder et renseigner les attributs privés :
$utilisateur->setAge(34);
echo $utilisateur->getAge()  . '<br>';

$utilisateur->setTravail('Dev');
echo $utilisateur->getTravail()  . '<br>';

// class personne {
//     public $nom ;
//     public $sexe ;
//     private $adress ;   

//     public function getAdress() {
//         return $this->_adress;
//     }
//     public function setAdress($adress) {
//        $this->_adress = $adress;
//     }  
//   }


// $personne = new Personne ();

// $personne->nom = "Boony"."<br>";
// $personne->sexe = "Homme"."<br>";

// echo "Nom de la personne : " . $personne->nom ."<br>";
// echo("<br>");

// echo "Sexe de la personne : " . $personne->sexe ."<br>";
// echo("<br>");

// $personne->setAdress("Elysée");
// echo "Adresse de la personne : " . $personne->getAdress();
// echo("<br>");
class Voiture {
    public $marque = "marqueVoiture";
    public $couleur = "rouge";
    public $annee   = "2022";
    public $plaque  = "AA00AA";
    public $motorisation = "";
}
$voiture1 = new Voiture;
echo "couleur de la Voiture : " . $voiture1->couleur ."<br>";
echo "annee de la Voiture : " . $voiture1->annee ."<br>";

$voiture1->motorisation = "diesel"."<br>";
echo "Motorisation de la Voiture : " . $voiture1->motorisation ."<br>";

// $voiture2 = new Voiture;
// echo "couleur de la Voiture : " . $voiture2->couleur ."<br>";
// echo "annee de la Voiture : " . $voiture2->annee ."<br>";


class Voiture0 {
    public $marque = "marqueVoiture";
    public $couleur = "";
    public $annee   = "";
    public $plaque  = "";
    public $motorisation = "";
}
$voiture1 = new Voiture;

// $voiture1->marque = "Volvo"."<br>";
// echo "Marque de la Voiture : " . $voiture1->marque ."<br>";

$voiture1->couleur = "Vert"."<br>";
echo "Couleur de la Voiture : " . $voiture1->couleur ."<br>";

$voiture1->annee = date("Y")."<br>";
echo "Année de la Voiture : " . $voiture1->annee ."<br>";

$voiture1->plaque = "007BB00"."<br>";
echo "Plaque de la Voiture : " . $voiture1->plaque ."<br>";

$voiture1->motorisation = "Essence"."<br>";
echo "Motorisation de la Voiture : " . $voiture1->motorisation ."<br>";


?>