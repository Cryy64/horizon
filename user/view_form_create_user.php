<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Création d'un client</h2>
        <form action="index_create_user.php" method="POST">
            <div class="form-group">
                <label for="text">NOM CLIENT</label>
                <input type="text" class="form-control" placeholder="Entrer le nom du client" name="nom_client" id="nom_client">
            </div>
            <div class="form-group">
                <label for="test">PRENOM CLIENT:</label>
                <input type="text" class="form-control" placeholder="Entrer le prénom du client" name="prenom_client" id="prenom_client">
            </div>
            <button type="submit" class="btn btn-success">Créer</button>
        </form>
    </div>
</body>
</html>