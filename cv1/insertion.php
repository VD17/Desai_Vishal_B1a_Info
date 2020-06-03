<?php include("inc/header.inc.php");?>

<?php

  //Ouverture d'une connexion à la bdd
    //
     $objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');
    //
    // //préparation de la requête d'insertion (sql)
    //
     $pdoStat = $objetPdo->prepare('INSERT INTO experience VALUES (NULL, :emploie, :entreprise,:descriptions, :dates)');
    //
    // // On lie chaque id à une valeur
     $pdoStat->bindValue(':emploie',$_POST['emploie'],PDO::PARAM_STR);
     $pdoStat->bindValue(':entreprise',$_POST['nom_entreprise'],PDO::PARAM_STR);
     $pdoStat->bindValue(':descriptions',$_POST['description'],PDO::PARAM_STR);
     $pdoStat->bindValue(':dates',$_POST['id_date'],PDO::PARAM_STR);
    //
    //
     $insertIsOk =$pdoStat->execute();
    //
    if($insertIsOk){
       $message = "Les informations de présentations ont été ajoutées dans la bdd";
    
    } else {
         $message = "Erreur";
        }
    header('Location:index.php');
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
