<?php

var_dump($_POST);

$nom = $_POST['nom'];
$mail = $_POST['email'];
$note = $_POST['note'];
$case = $_POST['case'];
$comment = $_POST['comment'];

$choix = array(J/aine, je/n/aime/pas);
for($i = 0; $i < sizeof($choix); $i++)




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Mon livre de recettes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css\style.css">
</head>

<body>
    <header>
        <?php require "menu.php" ?>
    </header>
<body>

<p>
    <h1>Votre Formulaire à bien était envoyé !</h1>
</P>

    <?php $name ?>
    <?php $mail ?>
    <?php $note ?>
    <?php $choix ?>
    <?php $check ?>
    <?php $comment ?>

</body>

</html>