<?php
session_start();
if(isset($_POST['prenom']) && $_POST['prenom'] != NULL){
    $_SESSION['prenom'] = $_POST['prenom'];
}
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
<form action="profil.php" method="POST">
    <input
                type="mail"
                name="prenomEdited"
                placeholder="modifier votre mail"
                value=""
                required
            />
                <input
                type="submit"
                name="envoi"
             
            />


    </form>
    <p>Votre prénom est <?= $_SESSION['prenom'] ?></p>
<!--     <a style="padding-top:70px;" href="profil.php">Retourner sur mon profil</a> -->
</body>
</html>