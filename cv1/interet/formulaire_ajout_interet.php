<?php include("../inc/header.inc.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Ajouter vos interets </title>
  <link rel="stylesheet" href="wing.">
  <link rel="styleshee" href="style.css">
</head>
<body>
  <h1> Formulaire d'ajout d'un interets </h1>
  <form action=" insertion_interet.php" method="post">
    <p>
        <label for="titre">titre </label>
        <input type="text" id="id_titre" name="titre"/>
    </p>
    <p>
        <label for="description">Description </label>
        <input type="text" id="id_description" name="description"/>
    </p>
    <p> <input type="submit" class="btn btn-primary"></button>

    </form>
  </body>