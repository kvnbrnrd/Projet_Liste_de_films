<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.
include('info.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);


function getAllMovies() {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM films');

    return $movies->fetchAll();
}
//Ecrire la fonction getAllActors, getAllGenres, getAllRealisateurs

function getOneMovie($id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM films WHERE id_film='.$id.';');

    return $movies->fetch();
}

//ecrire getMoviesbyGenres, getMoviesByRealisateurs, getMoviesByTitre
function getMoviesByActor($actorname) {
    global $dbh;

    $movies = $dbh->prepare('SELECT acteurs.nom, acteurs.prenom, films.titre FROM acteurs, films, films_acteurs WHERE acteurs.nom = ? AND films_acteurs.id_acteur = acteurs.id_acteur AND films.id_film = films_acteurs.id_film');
    $movies->execute([$actorname]);

    return $movies->fetchAll();
}