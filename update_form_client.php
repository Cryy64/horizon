<?php 
require('database.php'); 
var_dump($_GET);
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="update_client.php" method="POST">
        <div class="form-group">
            <label for="text">Nom utilisateur</label>
            <input type="text" class="form-control" name= "nom_client" id="nom">
            <input type="hidden" value="<?php echo $id; ?>" name="id" id="id">
        </div>
        <div class="form-group">
            <label for="text">Prénom utilisateur</label>
            <input type="text" class="form-control" name="prenom_client" id="prenom">
        </div>
            <button type="submit" class="btn btn-default">Update</button>
            <button type="button" class="btn btn-default" onclick="history.back()" >Retour</button>
    </form>
</body>
</html>