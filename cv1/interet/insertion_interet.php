<?php include("../inc/header.inc.php");?>

<?php

  //Ouverture d'une connexion à la bdd
    //
     $objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');
    //
    // //préparation de la requête d'insertion (sql)
    //
     $pdoStat = $objetPdo->prepare('INSERT INTO interet VALUES (NULL, :titre, :description )');
    //
    // // On lie chaque id à une valeur
 
     $pdoStat->bindValue(':titre',$_POST['titre'],PDO::PARAM_STR);
     $pdoStat->bindValue(':description',$_POST['description'],PDO::PARAM_STR);
    //
     $insertIsOk =$pdoStat->execute();
    //
    if($insertIsOk){
       $message = "Les informations de présentations ont été ajoutées dans la bdd";
    
    } else {
         $message = "Erreur";
        }
  header('Location:../index.php');
     ?>


 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insertion des interets  </title>
  </head>
  <body>
  <p><?php echo $message; ?>

  </body>
</html> -->
