<?php

abstract class EtreVivant {
   public $esperanceVie;
   /* ... */
}

class Humain extends EtreVivant {
    public $taille;
    /* ... */
 }

/* $etreVivant = new EtreVivant; */

$etreHumain = new Humain;

var_dump($etreHumain);



