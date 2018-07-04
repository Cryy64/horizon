<?php

$nom = $_POST['nom_client'];
$prenom = $_POST['prenom_client'];

$req = $bdd->prepare("INSERT INTO client (nom_client,prenom_client) VALUE ('$nom','$prenom')");
$req->execute();