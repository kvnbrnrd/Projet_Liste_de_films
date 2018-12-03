<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - <?=$page?></title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<nav class="navbar navbar-inverse bg-inverse fixed-top text-center">
      <h1 class="col-lg-12">CANCOILLOTTE GAUMONT</h1>
</nav>
</header>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="index.php?page=Film&id_film=<?=$this_movie['id_film']?>">
                <h1>
                    <?=$this_movie['titre']?>
                </h1>
            </a>
          </div>
        </div>
      </header>
    </div>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="fiche">
            
                <div class="row">
                    <div class="col-md-4 img_film">
                        <img src="<?=$this_movie['url_img']?>" alt="">
                    </div>
                    <div class="col-md-4 infos_film">
                        <h3>Date de sortie : <?=$this_movie['annee_sortie']?>
                        </h3>
                        <h3>De : <?php foreach ($this_realisateur as $key => $value) {
                            echo $value['prenom']. " " . $value['nom'] . "<br>";
                        }?>
                        </h3>
                        <h3>Avec : <?php foreach ($this_actor as $key => $value) {
                            echo $value['prenom']. " " . $value['nom'] . "<br>";
                        }?>
                        </h3>
                        <h3>Genres : <?php foreach ($this_genre as $key => $value) {
                            echo $value['genre'] . "<br>";
                        }?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="syno">
        <h2>SYNOPSIS</h2>
            <p><?=$this_movie['description']?></p>
      </div>
        </div>
        </div>

    <footer class="d-flex justify-content-around fixed-bottom">
            <img src="imagesprojet/logoACS.png" alt="">
            <span>Développé par :<br>
            Lucas VAN DEN BERG, Morganne CULAS, Kevin BERNARD, Emilie QUINONERO
            </span>
    </footer>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>
</body>
</html>