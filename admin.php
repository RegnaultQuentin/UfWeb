<?php
include ('info.php');

session_start();
if(!isset($_SESSION['user'])){
    header('Location: connexion.php');
}

?>
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
