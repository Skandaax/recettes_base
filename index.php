<?php


var_dump($_GET);

$page = (isset($_GET["page"]))? $_GET{"page"} : "home";// entree

switch ($page){
    case "home":
        $include = "recettes/home.html";
        break;
    case "entree":
        $include = "recettes/entree.html";
        break;
    case "plat":
        $include = "recettes/plat.html";
        break;
    case "dessert":
        $include ="recettes/dessert.html";
        break;
    default : $include ="recettes/home.html";
}


$recetes_test = array (
    'Titre' => recipe-head
    'Description' => 
    'image' => 
)



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
        <?php require "html/menu.php" ?>
        </header>
        
        <?php require "html/recettes.php" ?>

    </body>

</html>