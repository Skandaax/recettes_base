<?php



?>

<!DOCTYPE html>
<html lang="fr">
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Devwbmob</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<header>
    <nav class="menu">
        <ul>
            <li><a href ="#">Page d'accueil</a></li>
            <li><a href ="index?page=entree">Les entrées</a>
                <ul class="sous-menu">
                    <li><a href ="index.php?page=entree&page=entree1">Entrée 1</a></li>
                    <li><a href ="index.php?page=entree&page=entree2">Entrée 2</a></li>
                    <li><a href ="index.php?page=entree&page=entree3">Entrée 3</a></li>
                </ul>
            </li>
            <li><a href ="index.php?page=entree">Les plats</a>
                <ul class="sous-menu">
                    <li><a href ="recettes/plats/plat1.html">Plat 1</a></li>
                    <li><a href ="recettes/plats/plat2.html">Plat 2</a></li>
                    <li><a href ="recettes/plats/plat3.html">Plat 3</a></li>
                </ul>
            </li>
            <li><a href ="index.php?page=desserts">Les desserts</a>
                <ul class="sous-menu">
                    <li><a href ="recettes/desserts/dessert1.html">Dessert 1</a></li>
                    <li><a href ="recettes/desserts/dessert2.html">Dessert 2</a></li>
                    <li><a href ="recettes/desserts/dessert3.html">Dessert 3</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>