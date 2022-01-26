<?php 
session_start();
if($_POST){
    $_SESSION["color"] = $_POST["color"];
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
 <a href="bonjour.php">Vers page bonjour</a>
     
 </body>
 </html>