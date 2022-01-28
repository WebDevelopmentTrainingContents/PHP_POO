<?php
// $pdo = new pdo('mysql:host=localhost;dbname=doranco', 'root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
// echo '<pre>'; print_r($pdo); echo '</pre>';
// Insertion :
// $result = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES 
// ('Jordan', 'BICHE', 'm', 'informatique', '2022-01-25', 7000),
// ('Guillaume', 'Miller', 'm', 'commercial', '2006-07-02', 1900),
// ('Celine', 'Perrin', 'f', 'commercial', '2006-09-10', 2700),
// ('Benjamin','Amzz','m', 'informatique', '18-09-1998', 9999),
// ('Julien', 'Cottet', 'm', 'secretariat', '2007-01-18', 1390)");
// echo $result . ' enregistrement(s) affecté(s) par la requête INSERT<br>';

// Modification (UPDATE) :
    // option 1 :
    // $result = $pdo->exec("UPDATE employes SET salaire = 33333 WHERE (service = 'informatique') OR (service ='commercial')");
    // echo $result . ' enregistrement(s) affecté(s) par la requête UPDATE<br>';

    // option 2 :
    // $result = $pdo->exec("UPDATE employes SET salaire = 24350 WHERE service IN ('informatique', 'commercial')");
    // echo $result . ' enregistrement(s) affecté(s) par la seconde requête UPDATE<br>';

    // modifier toute les personne avec un 'o' dans le prenom grace à %o% :
    //  $result = $pdo->exec("UPDATE employes SET salaire = 88888 WHERE (prenom LIKE '%o%')");
    // echo $result . ' enregistrement(s) affecté(s) par la seconde requête UPDATE<br>';




    // Suppression (DELETE) :
// $result = $pdo->exec("DELETE FROM employes WHERE (id_employes >500) and (id_employes <700) ");
// echo $result . ' enregistrement(s) affecté(s) par la requête DELETE<br>';
// $result = $pdo->exec("DELETE FROM employes WHERE (id_employes >1000) ");
// echo $result . ' enregistrement(s) affecté(s) par la requête DELETE<br>';

/* if($_POST)
{
    $result = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[sexe]', '$_POST[service]', '$_POST[date_embauche]', '$_POST[salaire]')");
    echo '<div style="background: green; padding: 5px;">l\'employé a bien été ajouté</div>';
}
 ?>
 
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
</form>*/


//  Affichage (SELECT) :
// $result = $pdo->query("SELECT * FROM employes WHERE prenom='julien'");
// $employe = $result->fetch(PDO::FETCH_ASSOC);
// echo "<pre>"; print_r($employe); echo "</pre>";
// echo "Bonjour je suis $employe[prenom] $employe[nom] du service $employe[service] et je gagne $employe[salaire]euro<br>";
session_start();

$pdo = new pdo('mysql:host=localhost;dbname=exoUtilisateur', 'root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password']))

$result = $pdo->exec("INSERT INTO utilisateurs (prenom, nom, mail, motDePasse) VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[email]', '$_POST[password]')");
    echo '<div style="background: green; padding: 5px;">l\'utilisateur a bien été ajouté</div>';

if (isset($_POST['theme']) && $_POST['theme'] != NULL){
    $_SESSION['theme'] = $_POST['theme'];
    }
    
if (isset($_POST['prenom']) && $_POST['prenom'] != NULL){
    $_SESSION['prenom'] = $_POST['prenom'];
    }
    
if (isset($_POST['nom']) && $_POST['nom'] != NULL){
    $_SESSION['nom'] = $_POST['nom'];
    }
    
if (isset($_POST['email']) && $_POST['email'] != NULL){
    $_SESSION['email'] = $_POST['email'];
    }
    
if (isset($_POST['password']) && $_POST['password'] != NULL){
    $_SESSION['password'] = $_POST['password'];
    }
    
if (isset($_POST['mailEdited']) && $_POST['mailEdited'] != NULL){
    $_SESSION['email'] = $_POST['mailEdited'];
    }
    
if (isset($_POST['passwordEdited']) && $_POST['passwordEdited'] != NULL){
    $_SESSION['password'] = $_POST['passwordEdited'];
    }
    
 ?>

