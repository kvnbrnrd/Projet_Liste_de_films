<?php

//le controlleur inclut le modèle
include('Models/Film.php');

//Récupérer les données (ici, tous les films car on est sur la home)


// $movies = getAllMovies();
$actorname = getMoviesByActor('Norton');


//traiter les données
// foreach ($movies as $key => $movie) {
//     $movie['realisateur'] = ucfirst($movie['realisateur']); //Mets une majuscule au nom du réalisateur
// }

//Le tableau retourné a en clé la table, et en valeur, les colonnes de la table.
foreach ($actorname as $key => $value) {
    $key['acteurs'].$value['nom'];
    $key['films'].$value['titre'];
}
foreach ($actorname as $key => $actor) {
	$actor['name'];
}
//inclure la vue
include('Views/HomeView.php');