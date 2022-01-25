<?php

use Utilisateur as GlobalUtilisateur;

class Equipe {
   public $nombreMembres;
   public $devise;
   public $embleme;
   public function __construct($nombreMembres, $devise) {
       $this->nombreMembres = $nombreMembres;
       $this->devise = $devise;
        
   }
}

$equipe = new Equipe('23', 'Bonjour à tous');
var_dump($equipe); 

// revient à :
$equipe2 = new Equipe('26', 'Salut');
var_dump($equipe2);

echo("<br><br>");

class Utilisateur {
    public $pseudo;
    public $mdp;
    private $_role;
    public function __construct($role) {
        $this->_role = $role;
     
         
    }
}

$user1 = new Utilisateur("admin");
$user1->pseudo = "Jo";
$user1->mdp = crypt("monMotDePasse", '$1$rasmusle$');
var_dump($user1);