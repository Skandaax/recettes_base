<?php


$recetes_test = array(
    'titre' => 'entrée 1',
    'image' => '../img/entree1.jpg',
    'Temps de préparation' => '15sec',
    'personnes' => '8',
    'Difficulté' => '1/4',
    'Coût' => '1/4',
    'Ingrédients' => '1 paquet depâtes de lasagnes///3 oignons jaunes///3 gousses d ail//1 branche de celerie///1carotte',
    'Etapes' => 'Faire revenir gousses hachées d ail et les oignons émincés dans un peu d huile d olive.///Ajouter la carrotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu a évaporation.'
);

var_dump($recetes_test);


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
<body>
    <h1><?php echo $recetes_test['titre']?></h1>
    <div></div>
</body>

</html>