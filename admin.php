<?php
include ('info.php');
session_start();
if(!isset($_SESSION['user'])){
    header('Location: connexion.php');
}


?>
<p>Salut</p>
<li>
    <a href='deco.php'>Deconexion</a>
</li>
