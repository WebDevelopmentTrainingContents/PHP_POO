<?php session_start();
$pdo = new pdo('mysql:host=localhost;dbname=exoUtilisateur', 'root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password']))

$result = $pdo->exec("INSERT INTO utilisateurs (prenom, nom, mail, motDePasse) VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[email]', '$_POST[password]')");
    echo '<div style="background: green; padding: 5px;">l\'utilisateur a bien été ajouté</div>';?>
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