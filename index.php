<?php
//on définit notre variable pour pouvoir inclure les fichier
define("C2SCRIPT","peut être n'importe quoi ici");
include("fonctions/fonctions.php");
//php -S localhost:8000 -t ./
//on se connecte à la base de données (à adapter/remplacer avec votre système de connexion)
$BDD = array();
$BDD['serveur'] = "localhost:3307";
$BDD['login'] = "root";
$BDD['pass'] = "root";
$BDD['bdd'] = "theatre";
$mysqli = mysqli_connect($BDD['serveur'],$BDD['login'],$BDD['pass'],$BDD['bdd']);
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
            <a class="navbar-brand" href="#">
              <img src="./images/logo.png" style="height:150%;">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a id="meabout" href="#about">A PROPOS</a></li>
              <li><a href="#portfolio">PROJETS</a></li>
              <!--<li><a href="#contact">CONTACT</a></li>-->
            </ul>
          </div>
        </div>
    </nav>


            
    <div class="banner-top2">
          <div class="banner-info text-center">
            <div class= "box">
              <h1 class="text-wh">L'Etroit Mousquetaire</h1>
              <h3 class="text-wh mx-auto my-4">Comédiens autonomes</h3>
            </div>
          </div>
    </div>
  

    <!-- General info -->
    <div id="about" class="container-fluid">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <h1><strong>Qui sommes-nous ?</strong></h1><br>
            <h3>Passionnés de théatre depuis notre plus jeune age, nous avons toujours plus l’envie d’aller sur scène ou derrière une camera.</h3><br><br>
            <h3>Aujourd’hui nous tentons une nouvelle aventure en se lancant dans des projets en total autonomie.</h3><br><br>
            <h3>Notre but est d’apporter l’authenticité de cet art à chacun. Avec une poussée aussi humble que possible et motivée par notre passion.</h3><br>
          </div>
          <div class="col-sm-4">
            <img src="./images/noussommes.jpg" style="width:100%;" alt="image" class="slideanim">
          </div>
          <div class="col-sm-1"></div>
        </div>
      </div>
      <!-- // General info -->
      <!-- Portfolio -->
      <div id="portfolio" class="container-fluid text-center bg-grey">
        <h1><strong>Nos Projets</strong></h1><br>
        <div class="row text-center row-flex">
          <div class="col-sm-4 project row-flex">
            <div class="thumbnail">
              <p><h2><strong>Mafia Blop</strong></h2></p>
              <p>L’idée de ce projet est de filmer un court-métrage que nous avons ecrit en un jour…<br>
                Ceci est notre première réalisation. Découvrez-en plus en cliquant sur l’image ci-dessous :<br></p>
              <a href="mafiablop.php" target="_blank">
                <img src="./images/titre.jpg" alt="MafiaBlop">
              </a>
            </div>
          </div>
          <div class="col-sm-4 project row-flex">
            <div class="thumbnail">
              <p><strong>Theatre</strong></p>
              <p>A venir </p>
            </div>
          </div>
          <div class="col-sm-4 project row-flex">
            <div class="thumbnail">
              <p><strong>A suivre</strong></p>
            </div>
          </div>
        </div>
      <!-- // Portfolio -->

    
      <div id="contact" class="container-fluid text-center">
        <div class="container">
          <p>Suite en cours de dvp</p>
        </div>
      </div>
      
      <img src="./images/logo.png">
      <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>FOOTER</p>
      </footer>

</body>

</html>