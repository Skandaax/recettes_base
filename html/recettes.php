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
        
        <h1 class="recipe-head"><? "$titre" ?></h1>
        
        <div class="illustration img-block"><a href="entree1.html"><img src="<?php echo $imgage ?>" alt="<?php echo $imgage_alt ?>" />
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
                        <td>15sec</td>
                        <td>8</td>
                        <td>1/4</td>
                        <td>1/4</td>
                    </tr>
                </table>

                <h2>Ingrédients</h2>
                <ul>
                    <li>1 paquet de pâtes de lasagnes</li>
                    <li>3 oignons jaunes </li>
                    <li>3 gousses d'ail</li>
                    <li>1 branche de céleri</li>
                    <li>1 carotte</li>
                    <li>etc ...</li>
                </ul>
            </div>

            <div class="col-6">
                <h2>Etapes</h2>
                <ol>
                    <li>Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.</li>
                    <li> Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.</li>
                    <li>Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.</li>
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
    
        </body>

</html>