<?php
session_start();
if(isset($_POST['nom']) && $_POST['nom'] != NULL){
    $_SESSION['nom'] = $_POST['nom'];
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
<form action="ExoVend.php" method="POST">
    <input
                type="nom"
                name="nomEdited"
                placeholder="modifier votre nom"
                value=""
                required
            />
                <input
                type="submit"
                name="envoi"
             
            />


    </form>
    <p>Votre nom est <?= $_SESSION['nom'] ?></p>

</body>
</html>