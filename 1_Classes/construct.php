<?php

class Equipe {
   public $nombreMembres;
   public $devise;
   public function __construct($nombreMembres, $devise) {
       $this->nombreMembres = $nombreMembres;
       $this->devise = $devise;
   }
}

$equipe = new Equipe('23', 'Bonjour à tous');
var_dump($equipe);

$equipe2 = new Equipe('44', 'coucou');
var_dump($equipe2);