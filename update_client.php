<?php
var_dump($_POST);
require('database.php');
require('variable.php');

$nom    = $_POST['nom_client'];
$prenom = $_POST['prenom_client'];
$nc     = "nom_client";
$pc     = "prenom_client";
$id     = $_POST['id'];
$idc    = "id_client";

$update = "UPDATE client SET $nc='$nom',$pc='$prenom' WHERE $idc = '$id'";

$req = $bdd->prepare($update);
$req->execute();

HEADER('LOCATION:gestion_client.php');
?>