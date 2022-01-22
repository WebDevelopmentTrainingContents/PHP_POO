<?php

class Produit {
   private $nom;
   public function getNom() {
       return $this->nom;
   }
   public function setNom($nom) {
       $this->nom = $nom;
} }
$product = new Produit();
$product->setNom('Pull');         // Définit la valeur de la propriété name
echo $product->getNom();          // Retourne et affiche la valeur de la propriété name


?>