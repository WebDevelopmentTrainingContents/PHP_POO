<?php
session_start();

$_SESSION['pseudo'] = "Jo";
$_SESSION['mdp'] = "Password";

print_r($_SESSION);
unset($_SESSION['mdp']);
echo '<br>';
print_r($_SESSION);
/* session_destroy();
print_r($_SESSION); */
echo '<br>';
if($_POST)
{
    $_SESSION["pseudo"] = $_POST['email'];
    $_SESSION["color"] = $_POST['color'];
}
//--------------------------------------
if(isset($_SESSION['pseudo']))
{
    echo "votre pseudo est: " . $_SESSION['pseudo'] . "<br>";
} 
else
{
    echo "Vous n'êtes pas authentifié.";
}

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
 
<a href="Bonjour/bonjour.php">Vers pages Bonjour</a>

</body>
</html>