<?php
session_start();

if(!isset($_SESSION['theme'])){
    $_SESSION['theme'] = "dark";
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
            <label for="role-select">Choisissez une thème:</label>

<select name="theme" id="role-select">
    <option value="">--Choisissez une thème :--</option>
    <option value="dark">Dark mode</option>
    <option value="light">Light mode</option>

</select>
         
            <input
                type="submit"
                name="envoi"
             
            />


    </form>
</body>
</html>