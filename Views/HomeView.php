<!-- Pas de HTML dans les models et controllers : première balise HTML dans la vue-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - <?=$page?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1><?=$page?></h1>


    <!-- FORMULAIRE PAR TITRE -->
    <div class="container formcont">
        <h1 id="titrecardbytitre">Recherche par titre</h1>
        <form id="formbytitre" action="" method="GET">
            <select name="whichtitre" id="selecttitre">
                <?php foreach($all_movies as $key=>$value) : ?>
                   <option value="<?=$key['films'].$value['id_film']?>"><?=$key['films'].$value['titre']?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Recherche">
        </form>
    </div>
    <ul>


    <!-- FORMULAIRE PAR ACTEUR -->
    <div class="container formcont">
        <h1 id="titrecardbyactor">Recherche par acteur</h1>
        <form id="formbyactor" action="" method="GET">
            <select name="whichactor" id="selectactor">
                <?php foreach($all_actors as $key=>$value) : ?>
                   <option value="<?=$key['acteurs'].$value['id_acteur']?>"><?=$key['acteurs'].$value['prenom']?> <?=$key['acteurs'].$value['nom']?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Recherche">
        </form>
    </div>
    <ul>

    <!-- FORMULAIRE PAR GENRE -->
    <div class="container formcont">
        <h1 id="titrecardbygenre">Recherche par genre</h1>
        <form id="formbygenre" action="" method="GET">
            <select name="whichgenre" id="selectgenre">
                <?php foreach($all_genres as $key=>$value) : ?>
                   <option value="<?=$key['genres'].$value['id_genre']?>"><?=$key['genres'].$value['genre']?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Recherche">
        </form>
    </div>
    <ul>

    <!-- FORMULAIRE PAR REALISATEURS -->
    <div class="container formcont">
        <h1 id="titrecardbyrealisateur">Recherche par réalisateur</h1>
        <form id="formbyrealisateur" action="" method="GET">
            <select name="whichrealisateur" id="selectrealisateur">
                <?php foreach($all_realisateurs as $key=>$value) : ?>
                   <option value="<?=$key['realisateurs'].$value['id_realisateur']?>"><?=$key['realisateurs'].$value['prenom']?> <?=$key['realisateurs'].$value['nom']?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Recherche">
        </form>
    </div>
    <ul>





    <!-- AFFICHER RESULTATS PAR TITRE-->
    <?php if(isset($movie_name)){
                foreach ($movie_name as $key => $value) : ?>
            <li><?=$key['films'].$value['titre']?> <?=$key['films'].$value['annee_sortie']?> <?=$key['realisateurs'].$value['prenom']?> <?=$key['realisateurs'].$value['nom']?></li><br>
            <?php endforeach; 
                foreach($movie_name as $key => $value){
                    echo $key['genres'].$value['genre'];
                }
        } ?>
        </ul>

    <!-- AFFICHER RESULTATS PAR ACTEURS-->
        <?php if(isset($actor_name)){
            foreach ($actor_name as $key => $value) : ?>
           <li><?=$key['acteurs'].$value['nom']?> : <?=$key['films'].$value['titre']?></li><br>
        <?php endforeach; } ?>
    </ul>

    <!-- AFFICHER RESULTATS PAR GENRE-->
        <?php if(isset($genre_name) && !empty($genre_name)){
            foreach ($genre_name as $key => $value) : ?>
           <li><?=$key['genres'].$value['genre']?> : <?=$key['films'].$value['titre']?></li><br>
        <?php endforeach; }
        elseif(isset($genre_name) && empty($genre_name)){
            echo "Nous n'avons pas de films dans cette catégorie.";
        } ?>
    </ul>

     <!-- AFFICHER RESULTATS PAR REALISATEURS-->
     <?php if(isset($realisateur_name)){
            foreach ($realisateur_name as $key => $value) : ?>
           <li><?=$key['realisateurs'].$value['nom']?> : <?=$key['films'].$value['titre']?></li><br>
        <?php endforeach; } ?>
    </ul>









<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>
</body>
</html>