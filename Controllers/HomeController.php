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
		$real_from_film[] = getRealFromIdFilm($value['id_film']);
	}
}

if (isset($_GET['whichgenre'])){
	//getOneGenre pour afficher le genre recherché
	$result_genre = getOneGenre($_GET['whichgenre']);
	//getMoviesByActor pour get l'ID des films avec un genre
	$id_film_from_genre= getMoviesByGenre($_GET['whichgenre']);

	if (isset($id_film_from_genre)){
		foreach ($id_film_from_genre as $key => $value){
			$movie_from_genre[] = getOneMovie($value['id_film']);
			$real_from_film[] = getRealFromIdFilm($value['id_film']);
		}
	}
}

if (isset($_GET['whichrealisateur'])){
	//getOneGenre pour afficher le genre recherché
	$result_real = getOneRealisateur($_GET['whichrealisateur']);
	//getMoviesByActor pour get l'ID des films avec un genre
	$id_film_from_realisateur= getMoviesByRealisateur($_GET['whichrealisateur']);

	if (isset($id_film_from_realisateur)){
		foreach ($id_film_from_realisateur as $key => $value){
			$movie_from_realisateur[] = getOneMovie($value['id_film']);
			$real_from_film[] = getRealFromIdFilm($value['id_film']);
		}
	}
}

if (isset($_GET['whichtitre'])){
	//getOneGenre pour afficher le genre recherché
	$result_titre = getOneMovie($_GET['whichtitre']);
	//getMoviesByActor pour get l'ID des films avec un genre
	$id_film_from_titre= getMoviesByTitre($_GET['whichtitre']);

	if (isset($id_film_from_titre)){
		foreach ($id_film_from_titre as $key => $value){
			$movie_from_titre[] = getOneMovie($value['id_film']);
			$real_from_film[] = getRealFromIdFilm($value['id_film']);
		}
	}
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