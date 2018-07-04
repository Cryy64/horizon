<?php
var_dump($_POST);
require('database.php');
require('variable.php');

$nom = $_POST['nom_client'];
$prenom = $_POST['prenom_client'];

$req = $bdd->prepare("$create_client ('$nom','$prenom')");
$req->execute();

HEADER('LOCATION:gestion_client.php');
// ?>