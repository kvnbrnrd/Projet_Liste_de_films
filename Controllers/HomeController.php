<?php

//le controlleur inclut le modèle
include('Models/Film.php');

//Fonction résultats du fomulaire
if (isset($_GET['whichactor'])){
	$actor_name = getMoviesByActor($_GET['whichactor']);
}

if (isset($_GET['whichgenre'])){
	$genre_name = getMoviesByGenre($_GET['whichgenre']);
}

if (isset($_GET['whichrealisateur'])){
	$realisateur_name = getMoviesByRealisateur($_GET['whichrealisateur']);
}

if (isset($_GET['whichtitre'])){
	$movie_name = getMoviesByTitre($_GET['whichtitre']);
}



//fonctions ALL pour les listes déroulantes
$all_actors = getAllActors();
if (isset ($_GET['whichactor'])){
	$one_actor = getOneActor($_GET['whichactor']);
}

$all_genres = getAllGenres();
if (isset ($_GET['whichgenre'])){
	$one_genre = getOneGenre($_GET['whichgenre']);
}

$all_realisateurs = getAllRealisateurs();
if (isset ($_GET['whichrealisateur'])){
	$one_realisateur = getOneRealisateur($_GET['whichrealisateur']);
}

$all_movies = getAllMovies();
if (isset ($_GET['whichtitre'])){
	$one_movie = getOneMovie($_GET['whichtitre']);
}



	//inclure la vue
	include('Views/HomeView.php');