<?php include("../inc/header.inc.php");?>

<?php

// Ouverture d'une connexion à la bdd 

$objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');


$pdoStat = $objetPdo->prepare('UPDATE interet SET titre=:titre, description=:description WHERE id=:num');


//liaison du parametre nommé

$pdoStat->bindValue(':num',$_POST['numInt'],PDO::PARAM_INT);
$pdoStat->bindValue(':titre',$_POST['titre'],PDO::PARAM_STR);
$pdoStat->bindValue(':description',$_POST['description'],PDO::PARAM_STR);

 $executeIsOk = $pdoStat->execute();


 if($executeIsOk){
    $message = "Les informations ont été mise à jour ";
 
 } else {
      $message = "Echec de la maj";
     }
 
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Modification: resultat</title>
  </head>
  <body>

  <h1> Résultat de la modification </h1>
  <p><?php echo $message; ?>
      
  </body>
  </html>
