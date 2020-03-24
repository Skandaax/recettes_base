<?php

// Recette test //
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
    'Ingrédients' => '1 paquet depâtes de lasagnes///3 oignons jaunes///3 gousses d ail///1 branche de celerie///1carotte',
    'titre6' => 'Etapes',
    'Etapes' => 'Faire revenir gousses hachées d ail et les oignons émincés dans un peu d huile d olive.///Ajouter la carrotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu a évaporation.'
);


var_dump($recetes_test);

require "menu.php";

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
    <img src="<?php echo $recetes_test['image'] ?>" alt="">

    <h1 class="recipe-head"><?php echo $recetes_test['titre']?></h1>
        
        <div class="illustration img-block"><a href="entree1.html"><img src="../../img/entree1.jpg" alt="Image entrée 1">
        </a></div>

        <section class="row bg-light">
            <div class="col-6">
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
                </table>

                <h2><?php echo $recetes_test['titre5']?></h2>
                <ul>
                    <li><?php echo $recetes_test['Ingrédients']?></li>
                </ul>
            </div>

            <div class="col-6">
                <h2><?php echo $recetes_test['titre6']?></h2>
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