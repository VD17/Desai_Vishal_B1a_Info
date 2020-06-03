<?php include("../inc/header.inc.php");?>

<?php

  //Ouverture d'une connexion à la bdd
    //
     $objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');
    //
    // //préparation de la requête d'insertion (sql)
    //
     $pdoStat = $objetPdo->prepare('INSERT INTO pres VALUES (NULL, :prenom, :nom,:adresse, :tel, :mail)');
    //
    // // On lie chaque id à une valeur
     $pdoStat->bindValue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
     $pdoStat->bindValue(':nom',$_POST['nom_nom'],PDO::PARAM_STR);
     $pdoStat->bindValue(':adresse',$_POST['adresse'],PDO::PARAM_STR);
     $pdoStat->bindValue(':tel',$_POST['id_tel'],PDO::PARAM_STR);
     $pdoStat->bindValue(':mail',$_POST['id_mail'],PDO::PARAM_STR);
    //
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
