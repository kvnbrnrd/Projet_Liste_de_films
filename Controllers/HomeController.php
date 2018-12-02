<?php

//le controlleur inclut le modèle
include('Models/Film.php');

//Fonction résultats du fomulaire
if (isset($_GET['whichactor'])){
	//getOneActor pour afficher le nom de l'acteur recherché
	$result_actor = getOneActor($_GET['whichactor']);
	//getMoviesByActor pour get l'ID des films dans lesquels l'acteur a joué
	$id_film_from_actor = getMoviesByActor($_GET['whichactor']);
	foreach ($id_film_from_actor as $key => $value) {
		//liste les infos pertinentes pour la carte
		$movie_from_actor[] = getOneMovie($value['id_film']);
		$real_from_actor[] = getRealFromIdFilm($value['id_film']);
	}
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