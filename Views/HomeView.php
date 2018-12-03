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
    <link href="//db.onlinewebfonts.com/c/b57096ab3227c7c548789b441d307ec5?family=Neutra+Text+Light" rel="stylesheet" type="text/css"/> 
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Prata" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?=$page?>

<header>
<nav class="navbar navbar-inverse bg-inverse fixed-top justify-content-center">
<a href="Home"><img class ="logo" src="imagesprojet/logo_cancoillotte_gaumont.png" alt=""></a>
</nav>
</header>

<!-- FORMULAIRE PAR TITRE -->
<div class="row myforms">
          <div class="col-lg-3">
    <div class="container first">
        <h2 id="titrecardbytitre">titre</h2>
<!--Dropdown ins-->
<form class="dropdown" id="formbytitre" action="#titre_resultat" method="GET">

<!--Menu-->
  <select class=" btn btn-outline-mdb-color dropdown-toggle" name="whichtitre" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <div class="dropdown-menu dropdown-mdb-color">
        <?php foreach($all_movies as $key=>$value) : ?>
            <option class="dropdown-item" value="<?=$key['films'].$value['id_film']?>"><?=$key['films'].$value['titre']?></option>
        <?php endforeach; ?>
    </div>
  </select>
  <button class="btn btn-outline-mdb-color waves-effect">GO</button>
</form>
</div>
</div>

    <!-- FORMULAIRE PAR ACTEUR -->
    <div class="col-lg-3">
    <div class="container second">
        <h2 id="titrecardbyactor">acteur</h2>
        <form id="formbyactor" action="#titre_resultat" method="GET">
            <select class="btn btn-outline-mdb-color dropdown-toggle" name="whichactor" id="selectactor">
                <?php foreach($all_actors as $key=>$value) : ?>
                   <option value="<?=$value['id_acteur']?>"><?=$value['prenom']?> <?=$value['nom']?></option>
                <?php endforeach; ?>
            </select>
            <button class="btn btn-outline-mdb-color waves-effect">Go</button>
        </form>
    </div>
    </div><!-- /.col-lg-4 -->
          

    <!-- FORMULAIRE PAR GENRE -->
    <div class="col-lg-3">
    <div class="container third">
        <h2 id="titrecardbygenre">genre</h2>
        <form id="formbygenre" action="#titre_resultat" method="GET">
            <select class="btn btn-outline-mdb-color dropdown-toggle" name="whichgenre" id="selectgenre">
                <?php foreach($all_genres as $key=>$value) : ?>
                   <option value="<?=$value['id_genre']?>"><?=$value['genre']?></option>
                <?php endforeach; ?>
            </select>
            <button class="btn btn-outline-mdb-color waves-effect">go</button>
        </form>
    </div>
    </div><!-- /.col-lg-4 -->
    
    <!-- FORMULAIRE PAR REALISATEURS -->
    
    <div class="col-lg-3">
    <div class="container last">
        <h2 id="titrecardbyrealisateur">réalisateur</h2>
        <form id="formbyrealisateur" action="#titre_resultat" method="GET">
            <select class="btn btn-outline-mdb-color dropdown-toggle" name="whichrealisateur" id="selectrealisateur">
                <?php foreach($all_realisateurs as $key=>$value) : ?>
                   <option value="<?=$value['id_realisateur']?>"><?=$value['prenom']?> <?=$value['nom']?></option>
                <?php endforeach; ?>
            </select>
            <button class="btn btn-outline-mdb-color waves-effect">go</button>
        </form>
    </div>
    </div>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="Film?id_film=4">
                    <img class="d-block w-100" src="imagesprojet/bigfish_carrousel.jpg" alt="film poster">
                </a>
            </div>
            <div class="carousel-item">
                <a href="Film?id_film=6">
                    <img class="d-block w-100" src="imagesprojet/drive_carrousel.jpg" alt="film poster">
                </a>
            </div>
            <div class="carousel-item">
            <a href="Film?id_film=11">
                <img class="d-block w-100" src="imagesprojet/interstellar_carrousel.jpg" alt="film poster">
            </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<div class="container">

    <!-- Card deck -->
    <div class="card-deck">

        <!-- AFFICHER RESULTATS PAR TITRE-->
        <?php       
        if(isset($result_titre)){?>
            <style>
                #carouselExampleControls{
                    display:none;
                }
            </style>
            <h4 id="titre_resultat" class="resultattitre">
                <?php foreach ($result_titre as $key => $value) {
                    echo $value['titre'];
                }?>
            </h4>
            <?php
            foreach ($movie_from_titre as $key => $value) : ?>
                <!-- Card -->
                <div class="card mb-4">
                    <!--Image de la carte-->
                    <div class="view overlay">
                    <?php foreach($value as $value){?>
                            <img class="card-img-top poster_film" src="<?=$value['url_img']?>" alt="poster du film">
                            <a href="index.php?page=Film&id_film=<?=$value['id_film']?>">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Contenu de la carte-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><?=$value['titre']?></h4>
                            <!--Text-->
                            <div class="row">
                                <p class="card-text col-6">Réalisateur(s) : <?php
                                foreach ($real_from_film as $key => $real) {
                                    foreach ($real as $myreal) {
                                        echo $myreal['prenom'] . " " . $myreal['nom'] . "<br>";
                                    }
                                }?>
                                </p>
                                <p class="card-text col-6">
                                    Année de sortie : <?=$value['annee_sortie'];?>
                                </p>
                            </div>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a type="button" class="btn btn-outline-mdb-color waves-effect" href="index.php?page=Film&id_film=<?=$value['id_film']?>">Voir la fiche</a>
                        </div>
                    <?php } ?>
                </div>
            <?php endforeach; 
        } ?>
                
        <!-- AFFICHER RESULTATS PAR ACTEURS-->
        <?php       
        if(isset($result_actor)){?>
        <style>
                #carouselExampleControls{
                    display:none;
                }
            </style>
            <h4 id="titre_resultat" class="resultattitre">
                Voici les films avec <?php foreach ($result_actor as $key => $value) {
                                                echo $value['prenom'] . " " . $value['nom'] . " :";
                                            }?>
            </h4>
            <?php
            foreach ($movie_from_actor as $key => $value) : ?>
                <!-- Card -->
                <div class="card mb-4">
                    <!--Image de la carte-->
                    <div class="view overlay">
                    <?php foreach($value as $value){?>
                            <img class="card-img-top poster_film" src="<?=$value['url_img']?>" alt="poster du film">
                            <a href="index.php?page=Film&id_film=<?=$value['id_film']?>">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Contenu de la carte-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><?=$value['titre']?></h4>
                            <!--Text-->
                            <div class="row">
                                <p class="card-text col-6">Réalisateur(s) : <?php
                                foreach ($real_from_film as $key => $real) {
                                    foreach ($real as $myreal) {
                                        echo $myreal['prenom'] . " " . $myreal['nom'] . "<br>";
                                    }
                                }?>
                                </p>
                                <p class="card-text col-6">
                                    Année de sortie : <?=$value['annee_sortie'];?>
                                </p>
                            </div>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a type="button" class="btn btn-outline-mdb-color waves-effect" href="index.php?page=Film&id_film=<?=$value['id_film']?>">Voir la fiche</a>
                        </div>
                    <?php } ?>
                </div>
            <?php endforeach; 
        } ?>

        <!-- AFFICHER RESULTATS PAR GENRES-->
        <?php       
        if(isset($result_genre)){
            ?>
            <style>
                #carouselExampleControls{
                    display:none;
                }
            </style>
            <h4 id="titre_resultat" class="resultattitre">
                Voici les films du genre <?php foreach ($result_genre as $key => $value) {
                                                echo $value['genre'] . " :";
                                            }?>
            </h4>
            <?php
            if (isset($movie_from_genre)){
            foreach ($movie_from_genre as $key => $value) : ?>
                <!-- Card -->
                <div class="card mb-4">
                    <!--Image de la carte-->
                    <div class="view overlay">
                    <?php
                    foreach($value as $value){?>
                            <img class="card-img-top poster_film" src="<?=$value['url_img']?>" alt="poster du film">
                            <a href="index.php?page=Film&id_film=<?=$value['id_film']?>">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Contenu de la carte-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><?=$value['titre']?></h4>
                            <!--Text-->
                            <div class="row">
                                <p class="card-text col-6">Réalisateur(s) : <?php
                                foreach ($real_from_film as $key => $real) {
                                    foreach ($real as $myreal => $myvalue) {
                                        echo $myvalue['prenom'] . " " . $myvalue['nom'] . "<br>";
                                    }
                                }?>
                                </p>
                                <p class="card-text col-6">
                                    Année de sortie : <?=$value['annee_sortie'];?>
                                </p>
                            </div>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a type="button" class="btn btn-outline-mdb-color waves-effect" href="index.php?page=Film&id_film=<?=$value['id_film']?>">Voir la fiche</a>
                        </div>
                    <?php } ?>
                </div>
                            <?php endforeach;
            }
                else{
                echo "Nous n'avons pas de films dans cette catégorie.";
            }
        }?>

    <!-- AFFICHER RESULTATS PAR REALISATEURS-->
        <?php       
        if(isset($result_real)){
            ?>
            <style>
                #carouselExampleControls{
                    display:none;
                }
            </style>
            <h4 id="titre_resultat" class="resultattitre">
                Voici les films réalisés par <?php foreach ($result_real as $key => $value) {
                                                echo $value['prenom'] . " " . $value['nom'] . " :";
                                            }?>
            </h4>
            <?php
            foreach ($movie_from_realisateur as $key => $value) : ?>
                <!-- Card -->
                <div class="card mb-4">
                    <!--Image de la carte-->
                    <div class="view overlay">
                    <?php
                    foreach($value as $value){?>
                            <img class="card-img-top poster_film" src="<?=$value['url_img']?>" alt="poster du film">
                            <a href="index.php?page=Film&id_film=<?=$value['id_film']?>">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Contenu de la carte-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><?=$value['titre']?></h4>
                            <!--Text-->
                            <div class="row">
                                <p class="card-text col-6">Réalisateur(s) : <?php
                                foreach ($real_from_film as $key => $real) {
                                    foreach ($real as $myreal => $myvalue) {
                                        echo $myvalue['prenom'] . " " . $myvalue['nom'] . "<br>";
                                    }
                                }?>
                                </p>
                                <p class="card-text col-6">
                                    Année de sortie : <?=$value['annee_sortie'];?>
                                </p>
                            </div>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a type="button" class="btn btn-outline-mdb-color waves-effect" href="index.php?page=Film&id_film=<?=$value['id_film']?>">Voir la fiche</a>
                        </div>
                    <?php } ?>
                </div>
            <?php endforeach; 
        } ?>


    <!-- ferme le card deck -->
    </div>
<!-- ferme le container -->
</div>



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