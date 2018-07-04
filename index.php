<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Accueil</title>
</head>

<body>
    <div style="text-align: center"><img  class="img-responsive" src="logo_3.png" alt="logo_3"></div>
    <div class="container">
      <div class="row" align="center">
        <!-- <h2 style="text-align: center">Bienvenue</h2> -->
        <form action="connexion_database.php" method="POST">
          <div style="text-align: center" class="form-group">
            <label>Utilisateur:</label>
            <input class="col-md-12 form-control mx-sm" style="text-align: center" type="text" placeholder="nom de compte" name="login">
          </div>
          <div style="text-align: center" class="form-group">
            <label>Mot de passe:</label>
            <input style="text-align: center" type="password" class="form-control mx-sm" placeholder="Mot de passe" name="password">
          </div>
          <div style="text-align: center" class="checkbox">
            <label><input type="checkbox" name="remember">Se rappeler de moi</label>
          </div>
          <div style="text-align: center"><button type="submit" class="btn btn-outline-success">Connexion</button>
          <button type="reset" class="btn btn-outline-warning">Effacer</button>
          </div> 
        </form>
        </div>
      </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>