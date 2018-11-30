<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.
include('info.php');


$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass); 


//Ecrire la fonction getAllActors, getAllGenres, getAllRealisateurs

// Ici, toutes les fonctions GetOne, pour permettre au formulaire de prendre un seul résultat

function getOneMovie($id_movie) {
    global $dbh;

    $one_movie = $dbh->prepare('SELECT * FROM films WHERE id_film=?;');
    $one_movie->execute([$id_movie]);


    return $one_movie->fetchAll();
}

function getOneActor($id_actor) {
    global $dbh;

    $one_actor = $dbh->prepare('SELECT * FROM actors WHERE id_acteur=?;');
    $one_actor->execute([$id_actor]);


    return $one_actor->fetchAll();
}

function getOneGenre($id_genre) {
    global $dbh;

    $one_genre = $dbh->prepare('SELECT * FROM genres WHERE id_genre=?;');
    $one_genre->execute([$id_genre]);


    return $one_genre->fetchAll();
}

function getOneRealisateur($id_realisateur) {
    global $dbh;

    $one_realisateur = $dbh->prepare('SELECT * FROM realisateurs WHERE id_realisateur=?;');
    $one_realisateur->execute([$id_realisateur]);


    return $one_realisateur->fetchAll();
}

// Fin fonctions GetOne

// Ici, toutes les fonctions GetAll, pour permettre au formulaire d'afficher la liste de résultats

function getAllMovies() {
    global $dbh;

    $all_movies = $dbh->prepare('SELECT * FROM films');
    $all_movies->execute([]);

    return $all_movies->fetchAll();
}

function getAllActors() {
    global $dbh;

    $all_actors = $dbh->prepare('SELECT * FROM acteurs');
    $all_actors->execute([]);


    return $all_actors->fetchAll();
}

function getAllGenres() {
    global $dbh;

    $all_genres = $dbh->prepare('SELECT * FROM genres');
    $all_genres->execute([]);


    return $all_genres->fetchAll();
}

function getAllRealisateurs() {
    global $dbh;

    $all_realisateurs = $dbh->prepare('SELECT * FROM realisateurs');
    $all_realisateurs->execute([]);


    return $all_realisateurs->fetchAll();
}

// Fin fonctions GetAll

//ecrire getMoviesbyGenres, getMoviesByRealisateurs, getMoviesByTitre
// Ici, toutes les fonctions GetTrucByTruc, pour lier les résultats de plusieurs tables entre eux
function getMoviesByActor($id_actor) {
    global $dbh;

    $movies_by_actor = $dbh->prepare('SELECT acteurs.prenom, acteurs.nom, films.titre FROM acteurs, films, films_acteurs WHERE acteurs.id_acteur = ? AND films_acteurs.id_acteur = acteurs.id_acteur AND films.id_film = films_acteurs.id_film');
    $movies_by_actor->execute([$id_actor]);


    return $movies_by_actor->fetchAll();
}

function getMoviesByGenre($id_genre) {
    global $dbh;

    $movies_by_genre = $dbh->prepare('SELECT films.titre , genres.genre FROM genres, films, genres_films WHERE genres.id_genre = ? AND genres_films.id_genre = genres.id_genre AND films.id_film = genres_films.id_film');
    $movies_by_genre->execute([$id_genre]);
    return $movies_by_genre->fetchAll();
}


function getMoviesByRealisateur($id_realisateur) {
    global $dbh;

    $movies_by_realisateur = $dbh->prepare('SELECT realisateurs.prenom, realisateurs.nom, films.titre FROM realisateurs, films, films_realisateurs WHERE realisateurs.id_realisateur = ? AND realisateurs.id_realisateur = films_realisateurs.id_realisateur AND films.id_film = films_realisateurs.id_film');
    $movies_by_realisateur->execute([$id_realisateur]);


    return $movies_by_realisateur->fetchAll();
}


function getMoviesByTitre($id_titre) {
    global $dbh;

    $movies_by_titre = $dbh->prepare('SELECT films.id_film, films.titre, films.url_img, films.annee_sortie, realisateurs.prenom, realisateurs.nom, genres.genre  FROM films, genres,genres_films, realisateurs, films_realisateurs WHERE films.id_film = ? AND films.id_film = films_realisateurs.id_film AND realisateurs.id_realisateur = films_realisateurs.id_realisateur AND films.id_film = genres_films.id_film AND genres_films.id_genre = genres.id_genre ');
    $movies_by_titre->execute([$id_titre]);


    return $movies_by_titre->fetchAll();
}

// function getTrucByTruc($) {
//     global $dbh;

//     $ = $dbh->prepare('SELECT');
//     $->execute([$]);


//     return $->fetchAll();
// }

// function getTrucByTruc($) {
//     global $dbh;

//     $ = $dbh->prepare('SELECT');
//     $->execute([$]);
<<<<<<< HEAD
//     return $->fetchAll();
=======


// Fin fonctions GetTrucByTruc

//     return $->fetchAll();
// }
>>>>>>> 2bf848af90e18c6a3f982991f1eb2503e60301b3
