<?php

// class Equipe {
//    public $nombreMembres;
//    public $classe;
//    public $spécialite;
//    public function __construct($nombreMembres, $classe) {
//        $this->nombreMembres = $nombreMembres;
//        $this->classe = $classe;
        
//    }
// }

// $equipe = new Equipe('23', 'Bonjour à tous');
// var_dump($equipe); 

// // revient à :
// $equipe2 = new Equipe('26', 'Salut');
// var_dump($equipe2);



class Guilde {
    public $nombreMembres;
    public $classe;
    public $specialite;
    public function __construct($nombreMembres, $classe, $specialite) {
        $this->nombreMembres = $nombreMembres;
        $this->classe = $classe;
        $this->specialité = $specialite;
         
    }
 }
 
 $guilde = new Guilde('9', 'Guerrier',"Tank");
 var_dump($guilde); 
 

 $guilde2 = new Guilde('15', 'Mage',"Dégats");
 var_dump($guilde2);

 $guilde3 = new Guilde('29', 'Pretre', "healer");
 var_dump($guilde3);

?>


