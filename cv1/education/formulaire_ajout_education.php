<?php include("../inc/header.inc.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Ajouter vos études </title>
  <link rel="stylesheet" href="wing.">
  <link rel="styleshee" href="style.css">
</head>
<body>
  <h1> Formulaire d'ajout d'une education </h1>
  <form action=" insertion_education.php" method="post">
    <p>
        <label for="ecole">Etablissement </label>
        <input type="text" id="id_ecole" name="ecole"/>
    </p>
    <p>
        <label for="diplome">Diplome </label>
        <input type="text" id="id_diplome" name="diplome"/>
    </p>
    <p>
        <label for="annee">Année</label>
        <input type="text-area" id="id_annee" name="annee"/>
    </p>
    <p> <input type="submit" class="btn btn-primary"></button>

    </form>
  </body>