<?php
session_start();

$_SESSION['pseudo'] = "Jo";
$_SESSION['mdp'] = "Password";
print_r($_SESSION);
unset($_SESSION['mdp']);
print_r($_SESSION);
/* session_destroy();
print_r($_SESSION); */

if($_POST)
{
    $_SESSION["pseudo"] = $_POST['email'];
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