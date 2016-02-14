<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Meet My Start-up - Accueil</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mms.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
 <?php include 'header.php' ?>
    <!-- Carousel -->
    <div class="row">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="img-responsive center-block" src="img/sl1.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Des rencontres</h1>
                <p class="carousel-text">Grâce à Genius, les étudiants apprennent directement des entrepreneurs.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="img-responsive center-block" src="img/sl2.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>L'équipe Genius</h1>
                <p class="carousel-text">CentraleSupélec Genius s’inscrit dans un réseau d’association, le réseau “Genius“, créé en 2013 à l’Université Paris Dauphine. Aujourd’hui, Genius est présent dans 8 grands établissements.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="img-responsive center-block" src="img/sl3.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>L'esprit entrepreneurial</h1>
                <p class="carousel-text">L’association vise à promouvoir l’entrepreneuriat étudiant au sein des écoles, et cela, dès la première année.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- Contenu -->
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="row">
          <div class="jumbotron">
            <p class="punchline">Pour la première fois cette année, l’association Genius et l’École CentraleSupélec organisent un événement consacré à la rencontre entre étudiants et start-ups : <span class="pink">Meet My Start-up</span></p>
           </div>
           <div class="pjumbotron">
              <p>Rendez-vous le 7 janvier 2016 de 14h à 18h sur le campus de Châtenay-Malabry</p>          
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h2>CentraleSupélec</h2>
            <hr />  
            <div class="cadre_img">
              <a href="http://www.ecp.fr"><img class="img-responsive img" style="display: inline-block;" src="img/centralesupelec.png" width="250" alt="CentraleSupélec" /></a>
            </div>
            <hr />
            <p>La plus grande école d'ingénieurs françaises réunissant plus de 3000 étudiants.</p>
          </div>
          <div class="col-md-4">
            <h2>Meet My Start-up</h2>
            <hr />
            <div class="cadre_img">
              <img class="img-responsive img" style="display: inline-block;" src="img/mms.png" width="150" alt="Meet My Startup" />
            </div>
            <hr />
            <p>Une journée d'échanges entre étudiants et startups.
          </div>
          <div class="col-md-4">
              <h2>Participer</h2>
              <hr />
              <p>Vous souhaitez participer à Meet My Start-up aux côtés d'autres start-ups parisiennes ?</p>
              <a href="/Présentation%20MMS.pdf"><p>Téléchargez la plaquette entreprise</p></a>
              <a href="/inscription.php" target="blank"><p>Réservez votre stand</p></a>
          </div>
        </div>
      </div>
    </div>
  <?php include 'footer.php' ?>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
