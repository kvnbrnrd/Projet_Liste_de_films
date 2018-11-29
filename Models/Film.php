<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.
include('info.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);


//Ecrire la fonction getAllActors, getAllGenres, getAllRealisateurs

// Ici, toutes les fonctions GetOne, pour permettre au formulaire de prendre un seul résultat

function getOneMovie($id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM films WHERE id_film='.$id.';');

    return $movies->fetch();  
}

function getOneActor($) {
    global $dbh;

    $ = $dbh->prepare('SELECT');
    $->execute([$]);


    return $->fetchAll();
}

function getOneGenre($) {
    global $dbh;

    $ = $dbh->prepare('SELECT');
    $->execute([$]);


    return $->fetchAll();
}

function getOneRealisateur($) {
    global $dbh;

    $ = $dbh->prepare('SELECT');
    $->execute([$]);


    return $->fetchAll();
}

// Fin fonctions GetOne

// Ici, toutes les fonctions GetAll, pour permettre au formulaire d'afficher la liste de résultats
function getAllMovies() {
    global $dbh;

    $movies = $dbh->prepare('SELECT * FROM films');
    $movies->execute([$]);

    return $movies->fetchAll();
}

function getAllActors($) {
    global $dbh;

    $ = $dbh->prepare('SELECT');
    $->execute([$]);


    return $->fetchAll();
}

function getAllGenres($) {
    global $dbh;

    $ = $dbh->prepare('SELECT');
    $->execute([$]);


    return $->fetchAll();
}

function getAllRealisateurs($) {
    global $dbh;

    $ = $dbh->prepare('SELECT');
    $->execute([$]);


    return $->fetchAll();
}

// Fin fonctions GetAll

//ecrire getMoviesbyGenres, getMoviesByRealisateurs, getMoviesByTitre
// Ici, toutes les fonctions GetTrucByTruc, pour lier les résultats de plusieurs tables entre eux
function getMoviesByActor($actorname) {
    global $dbh;

    $movies_by_actor = $dbh->prepare('SELECT acteurs.nom, acteurs.prenom, films.titre FROM acteurs, films, films_acteurs WHERE acteurs.nom = ? AND films_acteurs.id_acteur = acteurs.id_acteur AND films.id_film = films_acteurs.id_film');
    $movies_by_actor->execute([$actorname]);


    return $movies->fetchAll();
}

function getMoviesByGenre($) {
    global $dbh;

    $movies_by_genre = $dbh->prepare('SELECT');
    $movies_by_genre->execute([$genre_name]);


    return $->fetchAll();
}

function getTrucByTruc($) {
    global $dbh;

    $ = $dbh->prepare('SELECT');
    $->execute([$]);


    return $->fetchAll();
}

function getTrucByTruc($) {
    global $dbh;

    $ = $dbh->prepare('SELECT');
    $->execute([$]);


    return $->fetchAll();
}

// Fin fonctions GetTrucByTruc