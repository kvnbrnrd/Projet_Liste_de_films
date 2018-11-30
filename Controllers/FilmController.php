<?php

//le controlleur inclut le ou les modèles
include('Models/Film.php');


//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)

if (isset($_GET['id_film'])){
$this_movie = getOneMovie($_GET['id_film']);
}
if (isset($_GET['id_actor'])){
$this_actor = getOneActor($_GET['id_actor']);
}
if (isset($_GET['id_realisateur'])){
$this_realisateur = getOneRealisateur($_GET['id_realisateur']);
}
if (isset($_GET['id_genre'])){
$this_genre = getOneGenre($_GET['id_genre']);
}

if (isset($this_movie['titre'])){
$this_titre = $this_movie['titre'];
}
if (isset($this_movie['url_img'])){
$this_image = $this_movie['url_img'];
}
if (isset($this_movie['annee_sortie'])){
$this_date = $this_movie['annee_sortie'];
}
if (isset($this_movie['id_description'])){
$this_description = $this_movie['id_description'];
}
if (isset($this_realisateur['nom'], $this_realisateur['prenom'])){
$this_real_nom = $this_realisateur['nom'].$this_realisateur['prenom'];
}
if (isset($this_genre['genre'])){
$this_nom_genre = $this_genre['genre'];
}

//traiter les données



//inclure la vue
include('Views/FilmView.php');

?>

<!-- <a href="index.php?page=Film?id_film=1"></a> -->
