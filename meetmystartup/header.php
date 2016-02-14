<header class="row">
  <!-- Logo -->
  <div class="col-xs-12 col-sm-3 col-md-2">
    <a href="/"><img class="logo-mms" src="img/mms.png" alt="Meet My Startup"/></a>
  </div>
  <!-- Nav -->
  <nav class="hidden-xs col-sm-offset-1 col-sm-12 col-md-offset-2 col-md-8 bottom-align">
    <ul class="nav nav-pills">
      <?php $url = $_SERVER['REQUEST_URI'];
      echo '<li role="presentation" ';
      if ($url == '/') {
        echo 'class="active"';
      }
      echo '><a href="/">Accueil</a></li>';

      echo '<li role="presentation" ';
      if ($url == '/evenement.php') {
        echo 'class="active"';
      }
      echo '><a href="/evenement.php">Événement</a></li>';
      
      echo '<li role="presentation" ';
      if ($url == '/offre.php') {
        echo 'class="active"';
      }
      echo '><a href="/offre.php">Offre</a></li>';
      
      echo '<li role="presentation" id="btn-ins" ';
      if ($url == '/inscription.php') {
        echo 'class="active"';
      }
      echo '><a href="/inscription.php">S\'inscrire</a></li>';

      ?>
    </ul>
  </nav>
</header>
