<?php include("inc/header.inc.php");?>

<?php

// Ouverture d'une connexion à la bdd 

$objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');


$pdoStat = $objetPdo->prepare('UPDATE pers set prenom=:prenom, nom=:nom, adresse=:adresse, tel=:tel, mail=mail WHERE id=:num');


//liaison du parametre nommé

$pdoStat->bindValue(':num',$_POST['numPers'],PDO::PARAM_INT);
$pdoStat->bindValue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
$pdoStat->bindValue(':nom',$_POST['nom'],PDO::PARAM_STR);
$pdoStat->bindValue(':adresse',$_POST['adresse'],PDO::PARAM_STR);
$pdoStat->bindValue(':tel',$_POST['id_tel'],PDO::PARAM_STR);
$pdoStat->bindValue(':mail',$_POST['id_mail'],PDO::PARAM_STR);

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
