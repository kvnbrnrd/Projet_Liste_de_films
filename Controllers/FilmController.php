<?php

//le controlleur inclut le ou les modèles
include('Models/Film.php');


//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
$this_movie = getOneMovie($_GET['id_film']);
$this_actor = getOneActor($_GET['id_actor']);
$this_realisateur = getOneRealisateur($_GET['id_realisateur']);
$this_genre = getOneGenre($_GET['id_genre']);


$this_titre = $this_movie['titre'];
$this_image = $this_movie['url_img'];
$this_date = $this_movie['annee_sortie'];
$this_description = $this_movie['id_description'];
$this_real_nom = $this_realisateur['nom'].$this_realisateur['prenom'];
$this_nom_genre = $this_genre['genre'];

//traiter les données



//inclure la vue
include('Views/FilmView.php');

?>

<!-- <a href="index.php?page=Film?id_film=1"></a> -->
