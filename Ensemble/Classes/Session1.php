<?php
session_start();
$_SESSION['pseudo'] = "Cyril";
$_SESSION['mdp'] = "Aime Aime";
print_r($_SESSION);
unset($_SESSION['mdp']);
print_r($_SESSION);
session_destroy();
print_r($_SESSION);



if($_POST)

$_SESSION["pseudo"]  = $_POST("email")
if(isset)

?>