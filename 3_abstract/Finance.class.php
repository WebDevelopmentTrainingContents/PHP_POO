<?php

abstract class Devise {
    public $devise;
}

class Transaction extends Devise {
    public $montant;
    public $date;
    public $produitAchete;
}

$transaction = new Transaction;

$transaction->montant = 1000;
$transaction->date = "Aujourd'hui";
$transaction->produitAchete = "Televiseur";
$transaction->devise = '$';

echo $transaction->date . " J'ai acheté un " .  $transaction->produitAchete . " pour " . $transaction->montant . $transaction->devise;

var_dump($transaction);
