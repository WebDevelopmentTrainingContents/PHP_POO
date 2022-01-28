<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=ExoUtilisateur', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if(!isset($_SESSION['theme'])){
    $_SESSION['theme'] = "dark";
}



?>
<!-- 
<form method="post">
    <label for="prenom">Prenom</label><br>
    <input type="text" name="prenom" placeholder="prenom" id="prenom" required=""><br><br>
    <label for="prenom">Nom</label><br>
    <input type="text" name="nom" placeholder="nom" id="nom" required=""><br><br>
    <label for="sexe">Sexe</label><br>
    Homme <input type="radio" name="sexe" placeholder="sexe" id="sexe" value="m" checked=""> -
    Femme <input type="radio" name="sexe" placeholder="sexe" id="sexe" value="f">   <br><br>
    <label for="service">Service</label><br>
    <input type="text" name="service" placeholder="service" id="service"><br><br>
    <label for="date_embauche">Date d'embauche <i>(Format: AAAA-MM-JJ)</i></label><br>
    <input type="text" name="date_embauche" placeholder="ex: 2015-07-30" id="prenom"><br><br>
    <label for="salaire">Salaire</label><br>
    <input type="text" name="salaire" placeholder="salaire" id="salaire"><br><br>
    <input type="submit"><br><br>
</form> -->

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