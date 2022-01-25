<?php

abstract class EtreVivant {
   public $esperanceVie;
   /* ... */
}

/* $etreVivant = new EtreVivant; */

class Humain extends EtreVivant {
    public $taille;
    public $regimeAlimentaire;
  
 } 

/* $etreVivant = new EtreVivant;
 */
$etreHumain = new Humain;

var_dump($etreHumain);



