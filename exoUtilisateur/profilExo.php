<?php
session_start();

if($_POST)
{
    $_SESSION["thème"] = $_POST["thème"];
    $_SESSION["nom"] = $_POST["nom"];
    $_SESSION["prenom"] = $_POST["prenom"];
    $_SESSION["email"] = $_POST["email"];
}

// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

   

    
  
</head>
<body class="<?= $_SESSION ["thème"]?>">

<h1>Modifier son adresse mail</h1>
<a href="mailModif.php">Modifier son adresse mail</a>
    
</body>
</html> 