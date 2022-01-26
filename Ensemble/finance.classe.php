<?php


abstract class devise{
    public $devise;
}

// $devise = new Devise;
// $devise->devise ="$";
// echo $devise->devise;


class Transaction{
    public $montant;
    public $date;
    public $produitAchete;
}

$transaction = new Transaction;

$transaction->montant = 1000 ;
$transaction->date = "Aujourd'hui" ;
$transaction->produitAchete = "Téléviseur" ;
$transaction->devise = "$" ;

echo $transaction->date . " J'ai acheté un " .  $transaction->produitAchete  . " pour " . $transaction->montant . $transaction->devise ;



var_dump($transaction) 




?>