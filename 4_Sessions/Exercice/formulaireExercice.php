<?php session_start(); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?= $_SESSION['color'] ?>;">
<form action="sessionExercice.php" method="POST">
    <label for="role-select">Choisissez une couleur:</label>

    <select name="color" id="role-select">
        <option value="">--Choisissez une couleur :--</option>
        <option value="red">Rouge</option>
        <option value="green">Vert</option>
        <option value="yellow">Jaune</option>
        <option value="blue">Bleu</option>
    </select>

    <input type="submit" name="envoi" />


</form>

<a href="sessionExercice.php"> Vers Session </a>

</body>
</html>




