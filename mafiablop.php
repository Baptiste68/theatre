<?php
//on définit notre variable pour pouvoir inclure les fichier
define("C2SCRIPT","peut être n'importe quoi ici");
include("fonctions/fonctions.php");

//on se connecte à la base de données (à adapter/remplacer avec votre système de connexion)
$BDD = array();
$BDD['serveur'] = "localhost:3307";
$BDD['login'] = "root";
$BDD['pass'] = "root";
$BDD['bdd'] = "theatre";
$localhost = "";
$dbname = "";
$user = "";
$foo = "";
$mysqli = pg_connect("host=$localhost dbname=$dbname user=$user password=$foo");
//$mysqli = mysqli_connect($BDD['serveur'],$BDD['login'],$BDD['pass'],$BDD['bdd']);
if(!$mysqli) exit('Connexion MySQL non accomplie!');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>L'Etroit Mousquetaire</title>
  <link rel="icon" type="image/png" href="./images/logo.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/font.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="./js/js.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
              <img src="./images/logo.png" style="height:150%;">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Accueil</a></li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- General info -->
    <div id="about" class="container-fluid">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <h1><strong>Mafia Blop</strong></h1><br>
            <h2><u>Notre premier court-métrage</u></h2>
            <h3>Une fois l’idée éclot, nous avons travaillé ensemble pour la développer afin de l’amener vers son état final.</h3>
            <h3>Nous avons ensuite décidé de l’emplacement, des décors et des costumes.</h3>
            <h3>Le jour J nous avons tout mis en place et enfin nous avons pu commencer à tourner.</h3>
            <h3>La difficulté lors de ce tournage résidait dans le fait que nous n’avions qu’une seule caméra et que nous étions que nous trois. Le challenge était complexe mais tout de même très intéressant.</h3><br><br>
            <h3>Nous avons eu beaucoup de plaisir à le tourner et à le monter.</h3>
            <h3>Nous vous laissons maintenant le découvrir en espérant que vous prendrez autant de plaisir.</h3><br>
          </div>
          <div class="col-sm-4">
          <img src="./images/logo.png">
          </div>
          <div class="col-sm-1"></div>
        </div>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/htfGuNxUreM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <a href=https://www.youtube.com/watch?v=htfGuNxUreM>
              <p>Lien de la video</p>
            </a>
          </div>
          <div class="col-sm-4">
          </div>
          <div class="col-sm-1"></div>
        </div>
        </div>
      </div>
      <!-- // General info -->

      <div id="comms" class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <div style="border-bottom:1px solid black">
          <h2>Postez un commentaire</h2>
          <?php afficherFormulaireCommentaire("mafiablop.php"); ?>
          <br /> <br />
            </div>
          <h2>Commentaires</h2>
          <?php afficherCommentaires(); ?>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-1"></div>
      </div>

      
      <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>FOOTER</p>
      </footer>

</body>

</html>