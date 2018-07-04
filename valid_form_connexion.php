<?php
session_start();


$mail_user = $_POST["login"];
$pass_user = sha1($_POST["password"]);

$bdd = new PDO('mysql:host=localhost;dbname=gmsi17;charset=utf8','root','');
// préparation de la equête
$req = $bdd->prepare("SELECT * FROM user WHERE`mail_user` =? AND `pass_user`=?");
// éxecution de la requête
$req->execute(array(
    $mail_user,
    $pass_user
));

$users = $req->fetchAll();
var_dump($users);

if(!empty($users)){
    $_SESSION["prenom_user"] = $users[0]["prenom_user"];
    $_SESSION["nom_user"] = $users[0]["nom_user"];
    $_SESSION["mail_user"] = $users[0]["mail_user"];
    header("LOCATION:user_bdd.php");
}else{
    header("LOCATION:form_connexion.php");
}



