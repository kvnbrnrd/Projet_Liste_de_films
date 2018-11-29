<?php

//le controlleur inclut le modèle
include('Models/Film.php');



//Récupérer les données (ici, tous les films car on est sur la home)
$movies = getAllMovies();
$actorname = getMoviesbyActor ('Norton');

//traiter les données
foreach ($movies as $key => $movie) {
    $movie['realisateur'] = ucfirst($movie['realisateur']); //Mets une majuscule au nom du réalisateur
}
foreach ($actorname as $key => $actor) {
	$actor['name'];
}
//inclure la vue
include('Views/HomeView.php');

