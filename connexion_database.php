<?php

    session_start();
    var_dump($_POST);
    var_dump($_SESSION);


    $user       =   $_POST["login"];
    $password   =   $_POST["password"];
    $_SESSION["login"]      = $user;
    $_SESSION["password"]   = $password;

    var_dump($user,$password);

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=exercice;charset=utf8', $user, $password);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

HEADER('LOCATION:accueil.php');
