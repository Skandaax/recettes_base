<?php


var_dump($_GET);

$page = (isset($_GET["page"]))? $_GET{"page"} : "entree";// entree

switch ($page){
    case "home":
        echo "Vous avez demandé la page d'accueil !";
        break;
    case "entree":
        echo "Page entree est ouverte";
        break;
    case "plat":
        echo "Page plat est ouverte";
        break;
    case "dessert":
        echo "page dessert est ouverte";
        break;
    default : echo "la page d'accueil s'ouvre !";
}



require "html/menu.php";


?>
 
<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <header>
        </header>
        
        <?php require "html/accueil.php" ?>

    </body>

</html>