<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.


$dbh = new PDO('mysql:host=localhost;dbname=films', 'root', 'L0Z8E9kF');

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

function getMoviesByGenre($gender_id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM movies WHERE gender_id='.$gender_id.';');

    return $movies->fetchAll();
}