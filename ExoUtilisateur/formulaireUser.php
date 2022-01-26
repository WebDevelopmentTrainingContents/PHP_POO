<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="profil.php" method="POST">
    <input 
        type="text" 
        name="nom" 
        placeholder="nom" 
        require>
    <input 
        type="text" 
        name="prenom" 
        placeholder="prenom" 
        require>
    <input 
        type="text" 
        name="email" 
        placeholder="email" 
        require>
    <input 
        type="password" 
        name="password" 
        placeholder="password" 
        require>

    <label for="role-select">Choisissez un thème:</label>
    <select name="theme" id="role-select">
                <option value="">--Choisissez un thème :--</option>
                <option value="dark">dark</option>
                <option value="light">light</option>
    </select>
    <input type="submit" name="envoi">

</form>
</body>
</html>
