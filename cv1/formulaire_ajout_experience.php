<?php include("inc/header.inc.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Ajouter une experience professionnelle </title>
  <link rel="stylesheet" href="wing.">
  <link rel="styleshee" href="style.css">
</head>
<body>
  <h1> Formulare d'ajout d'une expérience professionnelle </h1>
  <form action=" insertion.php" method="post">
    <p>
        <label for="emploie">Votre nom emploie </label>
        <input type="text" id="id_emploie" name="emploie"/>
    </p>
    <p>
        <label for="nom_entreprise">Votre nom entreprise </label>
        <input type="text" id="id_entreprise" name="nom_entreprise"/>
    </p>
    <p>
        <label for="description">description </label>
        <input type="text-area" id="id_description" name="description"/>
    </p>
    <p>
        <label for="date">durée emploie </label>
        <input type="text" id="id_date" name="id_date"/>
    </p>

    <p> <input type="submit" class="btn btn-primary"></button>

    </form>
  </body>


