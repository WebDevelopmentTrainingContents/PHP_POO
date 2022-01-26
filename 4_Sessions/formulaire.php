<?php
session_start();
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
    <form action="sessions.php" method="POST">
    <input
                type="text"
                name="nom"
                placeholder="nom"
                value=""
                required
            
                
            />
            <input
                type="text"
                name="prenom"
                placeholder="prenom"
                value=""
                required
            />
            <input
                type="email"
                name="email"
                placeholder="email"
                value=""
                required
            />
            <input
                type="password"
                name="password"
                placeholder="password"
                value=""
                required
            />
            <label for="role-select">Choisissez un rôle:</label>

<select name="role" id="role-select">
    <option value="">--Choisissez un rôle :--</option>
    <option value="admin">Admin</option>
    <option value="superadmin">SuperAdmin</option>
</select>

<label for="role-select">Choisissez une couleur:</label>

<select name="color" id="role-select">
    <option value="">--Choisissez une couleur :--</option>
    <option value="red">Rouge</option>
    <option value="green">Vert</option>
    <option value="yellow">Jaune</option>
    <option value="blue">Bleu</option>
</select>
         
            <input
                type="submit"
                name="envoi"
             
            />


    </form>
</body>
</html>

