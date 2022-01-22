<?php

class Equipe {
   public $nombreMembres;
   public $devise;
   public function __construct($nombreMembres='', $devise='') {
       $this->nombreMembres = $nombreMembres;
       $this->devise = $devise;
   }
}
$equipe = new Equipe(); // Appel implicite à $equipe->__construct()
$equipe = new Equipe( 22 , 'un pour tous'); // Appel implicite à $equipe->__construct( 22 , 'un pour tous')