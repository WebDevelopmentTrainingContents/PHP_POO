<?php session_start();?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body class='<?= $_SESSION["theme"]?>'>
<?php 
    if($_POST){
        $_SESSION["theme"] = $_POST["theme"];
        $_SESSION["prenom"] = $_POST["prenom"];
        $_SESSION["nom"] = $_POST["nom"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];


    }
    if(isset($_SESSION['prenom']))
    {
        echo "Bienvenue " . $_SESSION['prenom'] . "<br>";
    } 
    else
    {
        echo "Vous n'avez pas renseigné votre prénom.";
    }
    if(isset($_SESSION['nom']))
    {
        echo "Votre nom est " . $_SESSION['nom'] . "<br>";
    } 
    else
    {
        echo "Vous n'avez pas renseigné votre nom.";
    }
    if(isset($_SESSION['email']))
    {
        echo "votre email est " . $_SESSION['email'] . "<br>";
    } 
    else
    {
        echo "Vous n'avez pas renseigné votre email.";
    }
    if(isset($_SESSION['prenom']))
    {
        echo "vous avez bien renseigné votre password" . "<br>";
    } 
    else
    {
        echo "Vous n'avez pas renseigné votre password.";
    }
    // if($_SESSION["theme"]="dark"){
    //     echo "Votre theme est . ' .dark' ";
    // } ?>
    <a href="mail.php">Modifier son adresse mail</a>
 </body>
 </html>