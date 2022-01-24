<?php

require('voiture.php');
require('test.php');
require('construct.php');
require('extends.php');

$voiture = new Voiture;
echo 'couleur de la voiture : ' . $voiture->couleur . '<br>';
echo 'annee de la voiture : ' . $voiture->annee . '<br>';
echo 'manière dont la voiture démarre : ' . $voiture->demarrer() . '<br>';
echo 'type de moteur : ' . $voiture->carburant("à l'essence") . '<br>';
echo $voiture->plaque($voiture->getPlaque());

echo('<br><br>');

/* Tests avec la classe Test des privates et publics : 
 */

/* $test = new Test();
$test->nom = "TestNom";
echo $test->nom;
echo('<br>');

$test->setAge(22);

echo $test->getAge();
 */
/* $test->setAge(34);
echo $test->getAge(); */


echo('<br><br>');

/* Tests avec Construct :
*/


/* $equipe = new Equipe(); // Appel implicite à $equipe->__construct()
var_dump($equipe);
echo('<br>');
$equipe = new Equipe( 22 , 'un pour tous'); // Appel implicite à $equipe->__construct( 22 , "un pour tous")
var_dump($equipe);
echo('<br>');


$equipe2 = new Equipe(); // Appel implicite à $equipe->__construct()
var_dump($equipe2);
echo('<br>');
$equipe2 = new Equipe( 17 , 'tous grands'); // Appel implicite à $equipe->__construct( 22 , "un pour tous")
var_dump($equipe2);


echo('<br><br>'); */


/* Tests avec Extends :
*/

$truc = new Truc();
$truc->_setObjet("outils");
echo $truc->_getObjet();
echo('<br>');
/* $truc->_setChose('chose'); */


$truc2 = new Machin();
$truc2->_setObjet("pelle");
echo $truc2->_getObjet();
$truc2->_setChose("chose");
echo('<br>');
echo $truc2->_getChose();

/* $truc3 = new Machin();
$truc3->_setChose("chose");
echo('<br>');
echo $truc3->_getChose(); */
?>
