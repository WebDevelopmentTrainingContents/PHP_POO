<?php
$pdo = new PDO('mysql:host=localhost;dbname=DorancoPOO', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
/* echo '<pre>'; print_r($pdo); echo '</pre>';
 */
// Insertion :
/* $result = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Yaël', 'BICHE-D', 'm', 'informatique', '2022-01-25', 9999), ('Elo', 'DEC', 'f', 'informatique', '2022-01-25', 7000)");
echo $result . ' enregistrement(s) affecté(s) par la requête INSERT<br>'; */

// Modification (UPDATE) :

/*     // option 1 :
 $result = $pdo->exec("UPDATE employes SET salaire = 10350 WHERE (service = 'informatique') OR (service = 'commercial')");
    echo $result . ' enregistrement(s) affecté(s) par la première requête UPDATE<br>'; 


// option 2 :
    $result = $pdo->exec("UPDATE employes SET salaire = 24350 WHERE service IN ('informatique', 'commercial')");
    echo $result . ' enregistrement(s) affecté(s) par la seconde requête UPDATE<br>'; */


  /*   $result = $pdo->exec("UPDATE employes SET salaire = 224350 WHERE (prenom LIKE '%o%')");
    echo $result . ' enregistrement(s) affecté(s) par la requête UPDATE<br>'; */


// Suppression (DELETE) :
/* $result = $pdo->exec("DELETE FROM employes WHERE (id_employes >= 500) AND (id_employes <= 700)");
echo $result . ' enregistrement(s) affecté(s) par la requête DELETE<br>'; */

if($_POST)
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
</form>

<?php
 // Affichage (SELECT) :
$result = $pdo->query("SELECT * FROM employes WHERE id_employes=900");
$employe = $result->fetch(PDO::FETCH_ASSOC); 
echo "<pre>"; print_r($employe); echo "</pre>";
echo "Bonjour je m'appelle $employe[prenom] $employe[nom] du service $employe[service] et je gagne $employe[salaire] et j'ai été embauché le $employe[date_embauche]<br>";



