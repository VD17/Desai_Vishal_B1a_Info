<?php include("../inc/header.inc.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Ajouter vos informations personelles </title>
  <link rel="stylesheet" href="wing.">
  <link rel="styleshee" href="style.css">
</head>
<body>
  <h1> Formulare d'ajout d'informations personnelles </h1>
  <form action=" insertion_pers.php" method="post">
    <p>
        <label for="prenom">prenom </label>
        <input type="text" id="id_prenom" name="prenom"/>
    </p>
    <p>
        <label for="nom_nom">Votre nom </label>
        <input type="text" id="id_nom" name="nom_nom"/>
    </p>
    <p>
        <label for="adresse">adresse </label>
        <input type="text-area" id="id_adresse" name="adresse"/>
    </p>
    <p>
        <label for="tel">Tel </label>
        <input type="text" id="id_tel" name="id_tel"/>
    </p>
    <p>
        <label for="mail">mail </label>
        <input type="text" id="id_mail" name="id_mail"/>
    </p>

    <p> <input type="submit" class="btn btn-primary"></button>

    </form>
  </body>