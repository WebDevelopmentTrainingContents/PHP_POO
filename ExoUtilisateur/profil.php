<?php session_start();
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
    $_SESSION['email'] = $_POST['mailEdited'];
}


if(isset($_POST['passwordEdited']) && $_POST['passwordEdited'] != NULL){
    $_SESSION['password'] = $_POST['passwordEdited'];
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