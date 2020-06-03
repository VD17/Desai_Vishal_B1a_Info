

<?php

  //Ouverture d'une connexion à la bdd
    //
     $objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');
    //
    // //préparation de la requête d'insertion (sql)
    //
     $pdoStat = $objetPdo->prepare('SELECT * FROM certi');

     $executeIsOk = $pdoStat->execute();

     //Recuperation des resultats;

     $certif = $pdoStat->fetchAll();
     

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
<h2>Liste de vos certifications</h2>
<?php foreach ($certif as $certifs):?>
  <ul class="list-group">
  <li>
                -<?= $certifs['certif']?>-
                <a 
                        href="supprimer_cert.php?numCrt=<?=$certifs['id'] ?>">Supprimer</a>
                <br>
                        <a 
                        href="modifier_cert.php?numCrt=<?=$certifs['id'] ?>">Modifier</a>


            </li>
<?php endforeach; ?>
<a href="../index.php" class="btn btn-default"> retour a votre cv</a>
  </ul>
</div>

</body>
</html>

    

