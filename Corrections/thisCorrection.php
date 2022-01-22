<?php

class Animal {
   private $espece;
   
   public function getEspece() {
       return $this->espece;
   }
   
   public function setEspece($espece) {
       $this->espece = $espece;

    } 

    private $poids;

    public function getPoids() {
        return $this->poids;
    }
    
    public function setPoids($poids) {
        $this->poids = $poids;
 
     } 

}

$chien1 = new Animal();

  // Définit la valeur de la propriété espèce :
$chien1->setEspece('labrador'); 
  // Affiche la valeur de la propriété espèce :
echo $chien1->getEspece();   

  // Définit la valeur de la propriété espèce :
$chien1->setPoids('12kg'); 
  // Affiche la valeur de la propriété espèce :
echo $chien1->getPoids();  

echo("<br>");

var_dump($chien1);// Retourne et affiche la valeur de la propriété name

?>