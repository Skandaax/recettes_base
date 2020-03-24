<?php


$recetes_test = array(
    'titre' => 'entrée 1',
    'image' => 'img\dessert1.jpg',
    'titre1' => 'Temps de préparation',
    'Temps de préparation' => '15sec',
    'titre2' => 'Personnes',
    'personnes' => '8',
    'Titre3' => 'Difficulté',
    'Difficulté' => '1/4',
    'titre4' => 'Coût',
    'Coût' => '1/4',
    'titre5' => 'Ingrédients',
    'Ingrédients' => '1 paquet depâtes de lasagnes///3 oignons jaunes///3 gousses d ail//1 branche de celerie///1carotte',
    'titre6' => 'Etapes',
    'Etapes' => 'Faire revenir gousses hachées d ail et les oignons émincés dans un peu d huile d olive.///Ajouter la carrotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu a évaporation.'
);

var_dump($recetes_test);


include("menu.php");
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
        
    </header>
<body>
    <h1><?php echo $recetes_test['titre']?></h1>
    <div><?php ?></div>
    <div>
        <table>
            <tr>
                <th><?php echo $recetes_test['titre1']?></th>
                <th><?php echo $recetes_test['titre2']?></th>
                <th><?php echo $recetes_test['Titre3']?></th>
                <th><?php echo $recetes_test['titre4']?></th>
            </tr>
            <tr>
                <td><?php echo $recetes_test['Temps de préparation']?></td>
                <td><?php echo $recetes_test['personnes']?></td>
                <td><?php echo $recetes_test['Difficulté']?></td>
                <td><?php echo $recetes_test['Coût']?></td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <th><?php echo $recetes_test['titre5']?></th>
            </tr>
            <tr>
                <th><?php echo $recetes_test['Etapes']?></th>
            </tr> 
        </table>
    </div>
    <div>
        <table>
            <tr>
                <th><?php echo $recetes_test['titre6']?></th>
            </tr>
            <tr>
                <th><?php echo $recetes_test['Ingrédients']?></th>
            </tr> 
        </table>
    </div>

</body>

</html>