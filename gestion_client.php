<?php 
    require('database.php');
    require('navbar.php');
    require('variable.php');
    
    $req = $bdd->prepare($select.$table_client);
    $req->execute();
    $users = $req->fetchAll();
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
<div class="container">
    <h2>GESTION UTILISATEUR</h2>
    <a href="form_add_client.php" class="btn btn-success" role="button">Creer un utilisateur</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>IDENTIFIANT</th>
          <th>NOM</th>
          <th>PRENOM</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <?php
            foreach($users as $user){
              $id     = $user["id_client"] ;
              $prenom = $user["prenom_client"];
              $nom    = $user["nom_client"];
          ?>
        <tr>
          <td>  <?php echo $id;       ?></td>
          <td>  <?php echo $prenom;   ?></td>
          <td>  <?php echo $nom;      ?></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ACTION
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href=update_form_client.php?id=<?php echo $id; ?> >  MODIFIER</a></li>
                <li><a href=delete_client.php?id=<?php echo $id; ?> >SUPPRIMER</a></li>
              </ul>
            </div>
          </td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>
  </body>
</html>
