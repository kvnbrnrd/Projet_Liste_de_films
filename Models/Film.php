<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.

include('info.php');

$dbh = new PDO('mysql:host='. $host .';dbname=projetmerise'. $dbname, $user, $pass);

function getAllMovies() {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM movies');

    return $movies->fetchAll();

}

function getOneMovie($id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM movies WHERE id='.$id.';');

    return $movies->fetch();
}

// function getMoviesByGenre($gender_id) {
//     global $dbh;

//     $movies = $dbh->query('SELECT * FROM movies WHERE gender_id='.$gender_id.';');

//     return $movies->fetchAll();
// }

function getMoviesByActor($actor_name) {
    global $dbh;

    $movies = $dbh->query('SELECT acteurs.nom, acteurs.prenom, films.titre FROM `acteurs`, `films`, `films_acteurs` WHERE acteurs.nom = ".$actor_name." AND films_acteurs.id_acteur = acteurs.id_acteur AND films.id_film = films_acteurs.id_film');

    return $movies->fetchAll();
}