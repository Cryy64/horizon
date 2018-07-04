<?php

    function getclient()
{

require('database.php');

    $req = $bdd->prepare("SELECT * FROM client");
    $req->execute();

    return $req;
}
