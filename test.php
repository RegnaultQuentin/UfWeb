<?php
include ('info.php');

$requete_description = $bdd->prepare('SELECT description FROM moi');
$requete_description = $bdd->query('SELECT description FROM moi'); 
$requete_description->excute();
$datadescription = $requete_description->fetch();
$description = $datadescription['description'];

echo $description;

?>