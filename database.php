<?php

session_start();

$user       =   $_SESSION["login"];
$password   =   $_SESSION["password"];

var_dump($user,$password);

try
{
$bdd = new PDO('mysql:host=localhost;dbname=exercice;charset=utf8', $user, $password);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>