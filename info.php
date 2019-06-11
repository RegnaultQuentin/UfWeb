<?php
$host_name = 'quentinrjds4rdmi.mysql.db';
$database = 'quentinrjds4rdmi';
$user = 'quentinrjds4rdmi';
$password = 'Ynovb1b2019';
$bdd = null;

try{
    $bdd = new PDO("mysql:host=$host_name; dbname=$database; charset=utf8;", $user, $password);

} catch (PDOExecption $e) {
    echo "Erreur!:" . $e->getMessage() . "<br/>";
    die();
}
?>