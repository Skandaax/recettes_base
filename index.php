<?php

// Rooter
$page = (isset($_GET["page"]))? $_GET{"page"} : "home";// home

switch ($page){
    case "home":
        $include = "html/home.php";
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

var_dump($_GET);

?>
 
<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    
    <header>
        <?php require "html/menu.php" ?>
    </header>

     <body>   
        <?php require "html/home.php" ?>
        <?php require "html/recettes.php"?>
    </body>

</html>