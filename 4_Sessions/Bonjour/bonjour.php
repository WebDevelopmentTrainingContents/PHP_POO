<?php
session_start();
echo 'Bonjour ' . $_SESSION['pseudo'] . '<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?= $_SESSION['color'] ?>;">
 
<a href="../formulaire.php">Vers Formulaire</a>
</body>
</html>