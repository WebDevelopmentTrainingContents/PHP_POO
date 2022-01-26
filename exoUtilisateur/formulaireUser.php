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
    <link rel="stylesheet" href="style.css">
    
    
</head>

<body class="<?= $_SESSION ["thème"]?>">

<h1>Hello Mars !</h1>
    


<form action="profilExo.php" method="POST">


            <input
                type="text"
                name="nom"
                placeholder="nom"
                value=""
                required
            
                
            />
            <br>
            <input
                type="text"
                name="prenom"
                placeholder="prenom"
                value=""
                required
            />
            <br>
            <input
                type="email"
                name="email"
                placeholder="email"
                value=""
                required
            />
            <br>
            <input
                type="password"
                name="password"
                placeholder="password"
                value=""
                required
            />
            <br>
    <label for="role-select">Choisissez Dark/ White mode:</label>

    <select name="thème" id="role-select">
        <option value="thème">--Choisissez une couleur :--</option>
        <option value="Dark">Dark Mode</option>
        <option value="Light">Light Mode</option>       
    </select>

    <input type="submit" name="envoi" />

   
    <br>
    <a href="profilExo.php">Vers la session !</a>


</form>
</body>
</html>
