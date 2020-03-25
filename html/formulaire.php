<?php

var_dump($_POST);

$verif = isset($_POST["chk"])? "a" : "n'a pas";

//if (isset( $_POST['envoie'])) {

    //if (isset( $_POST['value_1'])) echo $_POST['value_1'].'<br />';
    //if (isset( $_POST['value_2'])) echo $_POST['value_2'].'<br />';

    // Contenu de la global P_POST
    //print_r($_POST);
    // }




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

<section class="fig-menu bg-light">
    <p>[<strong><?= $_POST['note'] ?></strong>] <?= $_POST['nom'] ?> (<?= $_POST['email'] ?>) vous a laissé le commentaire suivant :</p>
    <p>note : <?php $_POST['note'] ?> / 5</p>
    <p>(L'utilisateur <?php $verif ?> accepté les conditions génétales)</p>
</section>

</body>

</html>