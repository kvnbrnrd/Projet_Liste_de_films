<?php

//le controlleur inclut le ou les modèles
include('Models/Film.php');


//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
<<<<<<< HEAD
$this_movie = getOneMovie($_GET['id_film']);
$this_actor = getOneActor($_GET['id_actor']);
$this_realisateur = getOneRealisateur($_GET['id_realisateur']);
$this_genre = getOneGenre($_GET['id_genre']);
$this_date = getOneMovie($_GET['annee_sortie']);
$this_description = getOneMovie($_GET['id_realisateur']);
$this_image = getOneMovie($_GET['url_img']);

=======
//Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
$movie = getOneMovie($_GET['id_film']);
>>>>>>> 4bf0dac9fbac4849960e5f615fb26f4d0fa8f7a0

//traiter les données
$this_movie['realisateur'] = ucfirst($this_movie['realisateur']); //Mets une majuscule au nom du réalisateur


//inclure la vue
include('Views/FilmView.php');

?>

<<<<<<< HEAD
<!-- <a href="index.php?page=Film?id_film=1"></a> -->
=======




<a href="index.php?page=Film&id_film=53"></a>
>>>>>>> 4bf0dac9fbac4849960e5f615fb26f4d0fa8f7a0
