
<?php session_start();
$pdo = new PDO('mysql:host=localhost;dbname=exoutilsateur', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

 if((isset($_POST['prenom']) && $_POST['prenom'] != NULL) && (isset($_POST['nom']) && $_POST['nom'] != NULL) && (isset($_POST['enom']) && $_POST['enom'] != NULL) && (isset($_POST['password']) && $_POST['password'] != NULL)){ 

    $result = $pdo->exec("INSERT INTO utilisateurs (prenom, nom, enom, motDePasse) VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[enom]', '$_POST[password]')");
    echo '<div style="background: green; padding: 5px;">l\'utilisateur a bien été ajouté</div>';
 } 
/*  else{
     echo 'Veuillez remplir tous les champs';
 } */

if(isset($_POST['theme']) && $_POST['theme'] != NULL){
    $_SESSION['theme'] = $_POST['theme'];
}

if(isset($_POST['prenom']) && $_POST['prenom'] != NULL){
    $_SESSION['prenom'] = $_POST['prenom'];
}

 if(isset($_POST['nom']) && $_POST['nom'] != NULL){
     $_SESSION['nom'] = $_POST['nom'];
 }

if(isset($_POST['nom']) && $_POST['nom'] != NULL){
    $_SESSION['nom'] = $_POST['nom'];
}


if(isset($_POST['password']) && $_POST['password'] != NULL){
    $_SESSION['password'] = $_POST['password'];
}


if(isset($_POST['nomEdited']) && $_POST['nomEdited'] != NULL){
   
    $nomToEdit = $_SESSION['nom'];
    $result2 = $pdo->exec("UPDATE utilisateurs SET nom = '$_POST[nomEdited]' WHERE nom = '$nomToEdit'");
    $_SESSION['nom'] = $_POST['nomEdited'];
    echo 'Nom modifié avec succès !';
   }
