<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gestion administrative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Console d'administration</a></li>
            <li class="active"><a href="deconnexion.php"><i class="fas fa-power-off"></i></a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestion administrative
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="gestion_client.php">Client</a></li>
                  <li><a href="gestion_facture.php">Facture</a></li>
                  <li><a href="gestion_produit.php">Produit</a></li>
                  <li><a href="gestion_reglement.php">Reglement</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
 
</body>

</html>