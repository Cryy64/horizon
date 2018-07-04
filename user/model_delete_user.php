<?php

$id = $_GET['id'];

$req = $bdd->prepare("DELETE FROM client WHERE id_client = $id");
$req->execute();


