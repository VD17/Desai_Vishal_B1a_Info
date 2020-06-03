<?php include("../inc/header.inc.php");?>

<?php

//Ouverture d'une connexion à la bdd
    //
    $objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');
    //
    // //préparation de la requête d'insertion (sql)
    //
     $pdoStat = $objetPdo->prepare('DELETE FROM education WHERE id=:num ');

     $pdoStat->bindValue(':num',$_GET['numEdu'],PDO::PARAM_INT);
    //


     $executeIsOk = $pdoStat->execute();

       //
    if($executeIsOk){
        $message = "L'education a été supprimé";
     
     } else {
          $message = "echec Erreur revoir votre code";
         }
     header('Location:../index.php');
      ?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
      </head>
      <body>

      <h1> Suppression</h1>
      <p><?= $message ?></p>

          
      </body>
      </html>



