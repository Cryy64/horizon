<?php

require('database.php');

$id = $_GET['id'];

$req = $bdd->prepare("DELETE FROM client WHERE id_client=$id");
$req->execute();

HEADER('LOCATION:gestion_client.php');
