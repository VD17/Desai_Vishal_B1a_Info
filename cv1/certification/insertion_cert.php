<?php include("../inc/header.inc.php");?>

<?php

  //Ouverture d'une connexion à la bdd
    //
     $objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');
    //
    // //préparation de la requête d'insertion (sql)
    //
     $pdoStat = $objetPdo->prepare('INSERT INTO certi VALUES (NULL, :certif)');
    //
    // // On lie chaque id à une valeur
 
     $pdoStat->bindValue(':certif',$_POST['certif'],PDO::PARAM_STR);
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
    <title>Insertion des certifications  </title>
  </head>
  <body>
  <p><?php echo $message; ?>

  </body>
</html> -->
