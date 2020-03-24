<?php

// Recette test //
$recetes_test = array(
    'titre' => 'entrée 1',
    'image' => 'img\entree1.jpg',
    'Temps de préparation' => '15sec',
    'personnes' => '8',
    'Difficulté' => '1/4',
    'Coût' => '1/4',
    'Ingrédients' => '1 paquet depâtes de lasagnes///3 oignons jaunes///3 gousses d ail///1 branche de celerie///1carotte',
    'Etapes' => 'Faire revenir gousses hachées d ail et les oignons émincés dans un peu d huile d olive.///Ajouter la carrotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu a évaporation.'
);

/**********3 recettes***********/
// Recette entrée 2 //
$recette1 = array(
    'titre' => 'entrée 2',
    'image' => 'img\entree2.jpg',
    'Temps de préparation' => '15sec',
    'personnes' => '8',
    'Difficulté' => '1/4',
    'Coût' => '1/4',
    'Ingrédients' => '1 paquet depâtes de lasagnes///3 oignons jaunes///3 gousses d ail///1 branche de celerie///1carotte',
    'Etapes' => 'Faire revenir gousses hachées d ail et les oignons émincés dans un peu d huile d olive.///Ajouter la carrotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu a évaporation.'
);

// Recette plats 1 //
$recette2 = array(
    'titre' => 'plat 1',
    'image' => 'img\plat1.jpg',
    'Temps de préparation' => '15sec',
    'personnes' => '8',
    'Difficulté' => '1/4',
    'Coût' => '1/4',
    'Ingrédients' => '1 paquet depâtes de lasagnes///3 oignons jaunes///3 gousses d ail///1 branche de celerie///1carotte',
    'Etapes' => 'Faire revenir gousses hachées d ail et les oignons émincés dans un peu d huile d olive.///Ajouter la carrotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu a évaporation.'
);

// Recette dessert 1 //
$recette3 = array(
    'titre' => 'entrée 2',
    'image' => 'img\dessert1.jpg',
    'Temps de préparation' => '15sec',
    'personnes' => '8',
    'Difficulté' => '1/4',
    'Coût' => '1/4',
    'Ingrédients' => '1 paquet depâtes de lasagnes///3 oignons jaunes///3 gousses d ail///1 branche de celerie///1carotte',
    'Etapes' => 'Faire revenir gousses hachées d ail et les oignons émincés dans un peu d huile d olive.///Ajouter la carrotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu a évaporation.'
);

$cat_test = [
    "nom" => "Les entrées",
    "recettes" => [$recette1, $recette2, $recette3]
];




include "menu.php"

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

    <h1 class="recipe-head"><?php echo $recetes_test['titre']?></h1>
        
        <div class="illustration img-block"><a href="entree1.html"><img src="<?php echo $recetes_test['image']?>" alt="Image entrée 1">
        </a></div>

        <section class="row bg-light">
            <div class="col-6">
                <table>
                <tr>
                <th>Temps de préparation</th>
                <th>Personnes</th>
                <th>Difficulté</th>
                <th>Coût</th>
            </tr>
            <tr>
                <td><?php echo $recetes_test['Temps de préparation']?></td>
                <td><?php echo $recetes_test['personnes']?></td>
                <td><?php echo $recetes_test['Difficulté']?></td>
                <td><?php echo $recetes_test['Coût']?></td>
                </table>

                <h2>Ingrédients</h2>
                <ul>
                    <li><?php echo $recetes_test['Ingrédients']?></li>
                </ul>
            </div>

            <div class="col-6">
                <h2>Etapes</h2>
                <ol>
                    <li><?php echo $recetes_test['Etapes']?></li>
                </ol>
            </div>
        </section>
        <hr>
        <section>
            <h2>Commentaires</h2>
            <form action="../../index.html" method="post">
                <p>
                    <label for="nom">Votre nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom">
                </p>
                <p>Note /5 : 
                    <label for="rad0">0</label>
                    <input type="radio" id="rad0" name="nom" value="0">
                    <label for="rad1">1</label>
                    <input type="radio" id="rad1" name="nom" value="1">
                    <label for="rad2">2</label>
                    <input type="radio" id="rad2" name="nom" value="2">
                    <label for="rad3">3</label>
                    <input type="radio" id="rad3" name="nom" value="3">
                    <label for="rad4">4</label>
                    <input type="radio" id="rad4" name="nom" value="4">
                    <label for="rad5">5</label>
                    <input type="radio" id="rad5" name="nom" value="5">
                </p>
                <p> 
                    <label for="comment">Laissez-nous un commentaire</label><br>
                    <textarea id="comment" rows="5" cols="40"></textarea>
                </p>
                <p><input type="submit" value="Envoyer">
                </p>
            </form>
        </section>
</body>

</html>