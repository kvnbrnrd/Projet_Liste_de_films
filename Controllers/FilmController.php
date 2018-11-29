<?php

//le controlleur inclut le ou les modèles
include('Models/Film.php');
include('Models/Genre.php');


//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
//Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
$this_movie = getOneMovie($_GET['id_film']);

//traiter les données
$this_movie['realisateur'] = ucfirst($this_movie['realisateur']); //Mets une majuscule au nom du réalisateur


//inclure la vue
include('Views/FilmView.php');

?>





<a href="index.php?page=Film&id_film=53"></a>