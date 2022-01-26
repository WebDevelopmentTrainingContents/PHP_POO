<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail </title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?= $_SESSION ["thème"]?>;">
<form action="profilExo.php" method="POST">


<input
                type="email"
                name="email"
                placeholder="email"
                value=""
                required
            />
            <input type="submit" name="envoi" />
    
</body>
</html>