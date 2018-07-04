<?php

$nom    = $_POST['nom_client'];
$prenom = $_POST['prenom_client'];
$id     = $_POST['id'];

$update = "UPDATE client SET nom_client='$nom',prenom_client='$prenom' WHERE id_client= '$id'";

$req = $bdd->prepare($update);
$req->execute();

