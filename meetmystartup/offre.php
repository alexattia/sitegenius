<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Meet My Startup - Offre</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mms.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid" id="body-offre">
    <?php include 'header.php' ?>
    <!-- Contenu -->
    <div class="row">
      <div class="col-md-offset-1 col-md-4">
            <div id="offre-text">
              <p>Les prestations suivantes sont comprises dans la location d’un stand :</p>
            </div>
            
            <div class="poffre">
              <ul>
               <li>Table & Chaises</li>
               <li>Page personalisée sur notre site</li>
               <li>Com auprès de nos étudiants</li>
              </ul>
            </div>
            <div id="offre-text">
              <p>Pour participer, remplissez simplement le <a href="inscription.php">formulaire de pré-inscription</a> afin de réserver votre stand.</p>
            </div>
      </div>
      <div class="col-md-offset-1 col-md-5">
       <img class="img-responsive img" id="img-stand" style="display: inline-block;" src="img/stand.PNG" alt="Stand" />
       <hr />
       <img class="img-responsive img" id="img-com" style="display: inline-block;" src="img/com.PNG" alt="Communication" />
      </div>
    </div>
    <?php include 'footer.php' ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
