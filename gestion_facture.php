<?php 
    require('database.php');
    require('navbar.php');

    $req = $bdd->prepare('SELECT * FROM facture JOIN client on client.id_client=facture.id_client');
        $req->execute();
        $facts = $req->fetchAll();
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
    <h2>GESTION FACTURE</h2>
    <a href="" class="btn btn-success" role="button"></a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID FACTURE</th>
          <th>NOM CLIENT</th>
          <th>NUMERO</th>
          <th>MONTANT HT</th>
          <th>MONTANT TVA</th>
          <th>MONTANT TTC</th>
          <th>DATE ECHEANCE</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
          <?php
            foreach($facts as $fact){
          ?>
        <tr>
          <td>  <?php echo $fact["id_facture"];     ?></td>
          <td>  <?php echo $fact["nom_client"];     ?></td>
          <td>  <?php echo $fact["num_facture"];     ?></td>
          <td>  <?php echo $fact["montant_ht_facture"];     ?></td>
          <td>  <?php echo $fact["montant_tva_facture"];     ?></td>
          <td>  <?php echo $fact["montant_ttc_facture"];     ?></td>
          <td>  <?php echo $fact["date_echeance_facture"];     ?></td>
          <td>****</td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>
  </body>
</html>
