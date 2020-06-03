<?php include("inc/header.inc.php");?>

<?php

// Ouverture d'une connexion à la bdd 

$objetPdo = new PDO('mysql:host=localhost;dbname=cvbis','root','');



//

$pdoStat = $objetPdo->prepare('SELECT * FROM experience WHERE id =:num');

$pdoStat->bindValue(':num',$_GET['numExperience'],PDO::PARAM_INT);

//execution de la requete 

$executeIsOk = $pdoStat->execute();


//on recupere l'experience qu'on veut modifer
$experience = $pdoStat->fetch(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form  modification </title>

</head>
<body>

<h1> Modificer une expérience professionnelle </h1>
  <form action=" modifier.php" method="post">
    <input type="hidden" name="numExperience" value="<?= $experience['id']?>">
    <p>
        <label for="emploie">Votre nom emploie </label>
        <input type="text" id="id_emploie" name="emploie"value="<?= $experience['emploie'];?>"/>
    </p>
    <p>
        <label for="nom_entreprise">Votre nom entreprise </label>
        <input type="text" id="id_entreprise" name="nom_entreprise"value="<?= $experience['entreprise'];?>"/>
    </p>
    <p>
        <label for="description">description </label>
        <input type="text-area" id="id_description" name="description"value="<?= $experience['descriptions'];?>"/>
    </p>
    <p>
        <label for="date">durée emploie </label>
        <input type="text" id="id_date" name="id_date"value="<?= $experience['dates'];?>"/>
    </p>

    <p> <input type="submit" class="btn btn-primary"></button>

    </form>
    
</body>
</html>



