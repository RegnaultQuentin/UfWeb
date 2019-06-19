<?php
include ('info.php');

session_start();
if(!isset($_SESSION['user'])){
    header('Location: connexion.php');
}

?>
<!DOCTYPE html>
<html>
<head>
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">
   <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <style>
      body {
      font-family: "Lato";
      }
   </style>
</head>
<body>
   <div>
   <table>
      <tr>
         <th>Nom</th>
         <th>Mail</th>
         <th>Sujet</th>
         <th>Contenu</th>
      </tr>
      <?php 
         $requete_message = $bdd->query('SELECT * FROM message ORDER BY id DESC'); 
         $requete_message = $requete_message->fetchall();
         foreach($requete_message as $message): 
      ?>
      <tr>
         <td><?=$message['nom']?></td>
         <td><?=$message['email']?></td>
         <td><?=$message['sujet']?></td>
         <td><?=$message['message']?></td>
      </tr>
   <?php endforeach ?>
   </div>

   <li>
      <a href='deco.php'>Deconexion</a>
   </li>
</head>
</html>
