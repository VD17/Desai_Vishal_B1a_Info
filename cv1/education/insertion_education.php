<?php include("../inc/header.inc.php");?>

<?php

  //Ouverture d'une connexion à la bdd
    //
     $objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');
    //
    // //préparation de la requête d'insertion (sql)
    //
     $pdoStat = $objetPdo->prepare('INSERT INTO education VALUES (NULL, :ecole, :diplome,:annee)');
    //
    // // On lie chaque id à une valeur
 
     $pdoStat->bindValue(':ecole',$_POST['ecole'],PDO::PARAM_STR);
     $pdoStat->bindValue(':diplome',$_POST['diplome'],PDO::PARAM_STR);
     $pdoStat->bindValue(':annee',$_POST['annee'],PDO::PARAM_STR);
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
    <title>Insertion des experiences  </title>
  </head>
  <body>
  <p><?php echo $message; ?>

  </body>
</html> -->
