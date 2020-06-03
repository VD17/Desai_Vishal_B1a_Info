<?php include("../inc/header.inc.php");?>

<?php

  //Ouverture d'une connexion à la bdd
    //
     $objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');
    //
    // //préparation de la requête d'insertion (sql)
    //
     $pdoStat = $objetPdo->prepare('SELECT * FROM pres');

     $executeIsOk = $pdoStat->execute();

     //Recuperation des resultats;

     $pers = $pdoStat->fetchAll();
     

     ?>

     <!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Liste de vos informations personnelles</h2>
<?php foreach ($pers as $perso):?>
  <ul class="list-group">
     <?= $perso['prenom'] ?><?= $perso['nom']?>--<?= $perso['adresse'] ?>--<?= $perso['tel'] ?>--<?= $perso['mail'] ?> 
                <a 
                        href="supprimer_pers.php?numPers=<?=$perso['id'] ?>">Supprimer</a>
                <a 
                        href="pres/form_modification_pres.php?numPers=<?=$perso['id'] ?>">Modifier</a>
<?php endforeach; ?>
<a href="../index.php" class="btn btn-default"> retour a votre cv</a>
  </ul>
</div>

</body>
</html>


    

