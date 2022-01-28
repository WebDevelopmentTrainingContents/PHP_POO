<?php session_start();

$pdo = new pdo('mysql:host=localhost;dbname=exoUtilisateur', 'root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if ((isset($_POST['prenom']) && $_POST['prenom'] != NULL) (isset($_POST['nom']) && $_POST['nom'] != NULL) (isset($_POST['password']) && $_POST['password'] != NULL));

$result = $pdo->exec("INSERT INTO utilisateurs (prenom, nom, mail, motDePasse) VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[email]', '$_POST[password]')");
    echo '<div style="background: green; padding: 5px;">l\'utilisateur a bien été ajouté</div>';
if(isset($_POST['theme']) && $_POST['theme'] != NULL){
    $_SESSION['theme'] = $_POST['theme'];
}

if(isset($_POST['prenom']) && $_POST['prenom'] != NULL){
    $_SESSION['prenom'] = $_POST['prenom'];
}

if(isset($_POST['nom']) && $_POST['nom'] != NULL){
    $_SESSION['nom'] = $_POST['nom'];
}

if(isset($_POST['email']) && $_POST['email'] != NULL){
    $_SESSION['email'] = $_POST['email'];
}


if(isset($_POST['password']) && $_POST['password'] != NULL){
    $_SESSION['password'] = $_POST['password'];
}


if(isset($_POST['mailEdited']) && $_POST['mailEdited'] != NULL){
    // $_SESSION['email'] = $_POST['mailEdited'];
    $mailToEdit = $_SESSION['email'];
    // echo $mailToEdit
    // $result = $pdo->query("SELECT * FROMutilisateurs WHERE email = '$mailToEdit'");
    // $user = $result->fetch(PDO::FETCH_ASSOC);
    $result2 = $pdo->exec("UPDATE utilisateurs SET email = '$_POST[mailToEdited]' WHERE email= '$mailToEdit'");
    $_SESSION['email'] = $_POST['mailToEdited'];
    echo 'Mail modifié avec succès !';
}


if(isset($_POST['passwordEdited']) && $_POST['passwordEdited'] != NULL){
    // $_SESSION['password'] = $_POST['passwordEdited'];
    $passwordToEdit = $_SESSION['motDePasse'];
    // echo $mailToEdit
    $result = $pdo->query("SELECT * FROMutilisateurs WHERE motDePasse = '$password'");
    $user = $result->fetch(PDO::FETCH_ASSOC);
    $result2 = $pdo->exec("UPDATE utilisateurs SET email = '$_POST[mailToEdited]' WHERE email= '$mailToEdit'");
    $_SESSION['email'] = $_POST['mailToEdited'];
    echo 'Mail modifié avec succès !';
}
// à ne pas faire :
/* 
if($_POST){
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['theme'] = $_POST['theme'];
    $_SESSION['mailEdited'] = $_POST['mailEdited'];

} */



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body class="<?= $_SESSION['theme'] ?>">
    <p>Bonjour <?= $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></p>
    <p>Votre mail est <?= $_SESSION['email'] ?></p>
    <p>Votre password est <?= $_SESSION['password'] ?></p>
    <a style="margin-top:70px;" href="formulaireUser.php">Retour vers le formulaire</a>
    <a style="margin-top:70px;" href="modifMail.php">Modifier mon mail</a>
    <a style="margin-top:70px;" href="modifPass.php">Modifier mon MDP</a>
   
</body>
</html>