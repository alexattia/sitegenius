<?php
//set your email here:
$yourEmail = 'hello@geniusglobal.fr';
/*
 * CONTACT FORM
 */
//If the form is submitted
if(isset($_POST['submitted'])) { 
    //Check to make sure that the name field is not empty
    if($_POST['contact_name'] === '') { 
            $hasError = true;
    } else {
            $name = $_POST['contact_name'];
    }

    //Check to make sure sure that a valid email address is submitted
    if($_POST['contact_email'] === '')  { 
            $hasError = true;
    } else if (!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $_POST['contact_email'])) {
            $hasError = true;
    } else {
            $email = $_POST['contact_email'];
    }

    //Check to make sure comments were entered	
    if($_POST['contact_textarea'] === '') {
            $hasError = true;
    } else {
            if(function_exists('stripslashes')) {
                    $comments = stripslashes($_POST['contact_textarea']);
            } else {
                    $comments = $_POST['contact_textarea'];
            }
    }

    //If there is no error, send the email
    if(!isset($hasError)) {

            $emailTo = $yourEmail;
            $subject = "Message From Your Website";
            $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
            $headers = 'From : my site <'.$emailTo.'>' . "\r\n" . 'answer to : ' . $email;

            mail($emailTo, $subject, $body, $headers);

            $emailSent = true; 
    }
    
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title>Genius Global</title>
    <!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- MAIN STYLE -->
    <link href="css/customize.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet" media="screen">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <!--google analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68157241-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <!-- START BODY -->
  <body>
	<div id="page">
		<!-- PHP ALERTS FROM THE FORMS -->
	  <?php if(isset($emailSent) && $emailSent == true) { ?>
	        <div class="alert-success alert" >
	            <a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
	            <strong><?php echo'Thanks, '. $name  .'.';?></strong>
	                <p><?php echo'Your message was sent successfully. You will receive a response shortly.'; ?></p>
	        </div><!-- .alert -->
	    <?php } ?>
	    <?php if(isset($hasError) && $hasError == true) { ?>
	        <div class="alert-danger alert">
	            <a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
	            <strong><?php echo'Sorry,'; ?></strong>
	                <p><?php echo'Your message can\'t be send...check if your email is correct otherwise a field is missing...'; ?></p>
	        </div><!-- .alert -->
	    <?php } ?>
	    <!-- END ALERT -->
		<!-- START MAIN CONTAINER -->
		<div id="main-container">
		
			<!-- START NAVIGATION -->
			<div class="sticky-wrapper">
				<nav id="navigation">
					<div class="container">
						<!-- LOGO GOES HERE -->
						<a href="#" id="logo"><img src="images/LogoSF.png" alt="Logo Image"></a>
						<!-- MENU -->
						<nav>
							<ul id="menu">
								<li><a href="#project">Project</a></li>
								<li><a href="#team">Network</a></li>
								<li><a href="#services">Services</a></li>
								<li><a href="#gallery">Gallery</a></li>
								<li><a href="#events">Events</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			<!-- END NAVIGATION -->
			
			<!-- START PROJECT SECTION -->
			<section id="project" class="section" style="height: 505px;">
				<span class="sequence-prev" ></span>
				<span class="sequence-next" ></span>
	            <ul class="sequence-canvas text-center">
	            	<li class="animate-in" style="background-image: url('images/slider/1.jpg');">
		            	<div class="slide-content">
			            	<h1>Welcome !</h1>
			            	<h3>Genius is a corporation of student associations promoting entrepreneurship.</h3>
		            	</div>
	            	</li>
	            	<li style="background-image: url('images/slider/1.jpg');">
		            	<div class="slide-content">
			            	<h1>Our Project</h1>
			            	<h3>With Genius, students can discover the world of entrepreneurship. We help them develop a professionnal network. We provide formations
			            	and offer them opportunities to start up ! </h3>
		            	</div>
	            	</li>
	            	<li style="background-image: url('images/slider/1.jpg');">
		            	<div class="slide-content">
			            	<h1>Our Team</h1>
			            	<div class="center col-xs-3">
			            		<img src="images/slider/funder1.jpg" class="" alt="image in slider slide">
				            	<h3>Alexis<br \>Tuil</h3>
				            	<p>President<br \>Centrale Paris</p>
			            	</div>
			            	<div class="center col-xs-3">
			            		<img src="images/slider/funder2.jpg" class="" alt="image in slider slide">
				            	<h3>Michael Pereira</h3>
				            	<p>Treasurer<br \>Mines ParisTech</p>
			            	</div>
			            	<div class="center col-xs-3">
			            		<img src="images/slider/funder3.jpg" class="" alt="image in slider slide">
				            	<h3>Alexandre Attia</h3>
				            	<p>Vice-president<br \>Ponts et Chaussées</p>
			            	</div>
			            	<div class="center col-xs-3">
			            		<img src="images/slider/funder4.jpg" class="" alt="image in slider slide">
				            	<h3>Kevin Rabesaotra</h3>
				            	<p>Secretary-general<br \>Dauphine</p>
			            	</div>
			            </div>
	            	</li>
	            </ul>
            	<ul class="sequence-pagination">
					<li>Welcome</li>
					<li>Our Project</li>
					<li>Our Team</li>
				</ul>
			</section>
			<!-- END PROJECT SECTION -->
		
			<!-- START TEAM SECTION -->
			<section id="team" class="center section with-arrow">
				<!-- SECTION TITLE -->
				<div class="section-header">
					<h1>Who We Are</h1>
					<hr>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content section-no-top-padding">
					<div class="container">
						<h3>We are a network of <span class="colored">7</span> school associations, All members of <span class="colored">Genius Global</span>. Our federation organizes events,
						with the purpose of promoting <span class="colored">entrepreneurship</span>.
						</h3>
						<ul id="menu" style="float:none; margin-left:-65px;">
							<li class="logo-école"><a href="http://on.fb.me/1YIF6Us" id="Genius Dauphine"><img src="images/dauphine.png" ></a></li>
							<li class="logo-école"><a href="http://on.fb.me/1R9Eyls" id="Genius Mines"><img src="images/mines.png"></a></li>
							<li class="logo-école"><a href="http://on.fb.me/1PHK8KK" id="Genius Centrale"><img src="images/centrale.png"></a></li>
							<li class="logo-école"><a href="http://on.fb.me/1FsYEpG" id="Genius Ponts"><img src="images/ponts.png"></a></li>
							<li class="logo-école"><a href="http://on.fb.me/1Wrhmlv" id="Genius Supelec"><img src="images/supelec.png"></a></li>
							<li class="logo-école"><a href="http://on.fb.me/1MS60p9" id="Genius Strate"><img src="images/strate.png"></a></li>
							<li class="logo-école"><a href="http://on.fb.me/1OZWEal" id="Genius IPSA"><img src="images/IPSA.png"></a></li>
						</ul>
						<a href="#contact" class="btn btn-default">Get In Touch</a>
					</div>
				</div>
			</section>
			<!-- END TEAM SECTION -->
			
			<!-- START SERVICES SECTION -->
			<section id="services" class="section section-full-colored">
				<!-- SECTION TITLE -->
				<div class="section-header">
					<h1>What We Do</h1>
					<hr>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						<div class="services-slider flexslider">
		                    <ul class="slides">
								<!-- START SERVICE -->
		                        <li>
		                            <div class="slide">
										<span class="icon icon-large icon-binoculars"></span>
										<h3>Explore</h3>
										<p>We organize meetings between students and start-ups. It's an opportunity for them to discover what entrepreneurship really is.</p>
									</div>
								</li>
								<!-- END SERVICE -->
		                        <li>
		                            <div class="slide">
										<span class="icon icon-large icon-users2"></span>
										<h3>Connect</h3>
										<p>Our network is enriched by the constituting schools' interdisciplinarity. Therefore, we organize co-working events allowing our students to meet and share.</p>
									</div>
								</li>
		                        <li>
		                            <div class="slide">
										<span class="icon icon-large  icon-book"></span>
										<h3>Learn</h3>
										<p>In order to get ready to start their own business, we set up workshops and formations about entrepreneurship for our members.</p>
									</div>
								</li>
		                        <li>
		                            <div class="slide">
										<span class="icon icon-large icon-lab"></span>
										<h3>Start up</h3>
										<p>We offer our members the opportunity to begin in entrepreneurship. We help and guide them in their projects.</p>
									</div>
								</li>
		                       </ul>
						</div>
						<!-- SECTION BUTTON -->
						<div class="center">
							<a href="#events" class="btn btn-default">Our Diary</a>
						</div>
					</div>
				</div>
			</section>
			<!-- END SERVICES SECTION -->
			
			<!-- START GALLERY SECTION -->
			<section id="gallery" class="section">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1>Gallery</h1>
					<hr>
				</div>
				<!-- SECTION CONTENT -->
				<div class="content-section">
					<div id="gallery-slider">
		                <ul class="slides">
							<!-- SLIDE OF 2 GALLERY ITEMS -->
		                    <li>
		                    	<!-- FIRST ITEM GALLERY -->
		                    	<div class="gallery-item">
						    		<a href="images/gallery/1.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Genius Global Leaders</span>
							    		<img src="images/gallery/1.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    	<!-- SECOND ITEM GALLERY -->
		                    	<div class="gallery-item">
						    		<a href="images/gallery/2.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>The Genius</span>
							    		<img src="images/gallery/2.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    </li>
							<!-- END SLIDE -->
		                    <li>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/3.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Networking</span>
							    		<img src="images/gallery/3.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/4.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Meeting with Oussamah Amar</span>
							    		<img src="images/gallery/4.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    </li>
		                    <li>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/5.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Genius Strate</span>
							    		<img src="images/gallery/5.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/6.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Start-up Night</span>
							    		<img src="images/gallery/6.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    </li>
		                    <li>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/2.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>The Genius</span>
							    		<img src="images/gallery/2.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/4.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Meeting with Oussamah Amar</span>
							    		<img src="images/gallery/4.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    </li>
		                    <li>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/1.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Genius Global Leaders</span>
							    		<img src="images/gallery/1.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/6.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Start-up Night</span>
							    		<img src="images/gallery/6.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    </li>
		                    <li>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/2.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>The Genius</span>
							    		<img src="images/gallery/2.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/4.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Meeting with Oussamah Amar</span>
							    		<img src="images/gallery/4.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    </li>
		                    <li>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/5.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>Genius Strate</span>
							    		<img src="images/gallery/5.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    	<div class="gallery-item">
						    		<a href="images/gallery/2.jpg" data-fancybox-group="group1" class="fancybox">
						    			<span>The Genius</span>
							    		<img src="images/gallery/2.jpg" width="300" height="200" alt="Image gallery">
						    		</a>
					    		</div>
		                    </li>
		                </ul>
					</div>
				</div>
			</section>
			<!-- END GALLERY SECTION -->
			
			<!-- START EVENTS SECTION -->
			<section id="events" class="section section-content-colored with-arrow">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1>Upcoming Events</h1>
					<hr>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						<div class="flexslider events-slider">
			                <ul class="slides">
			                	<!-- START EVENT -->
			                    <li>
			                        <div class="slide">
										<div class="event">
											<!-- EVENT FEATURED IMAGE -->
											<div class="event-header">
												<a href="single-event.html">
													<img src="images/event/1.jpg" alt="Event cover">
												</a>
											</div>
											<!-- START CONTENT -->
											<div class="event-content">
												<!-- EVENT TITLE -->
												<h3>Genius Meets Blablacar</h3>
												<!-- EVENT DATAS -->
												<div class="event-data">
													<p><span class="icon icon-calendar"></span> October 7, 2015</p>
													<P><span class="icon icon-location"></span> 60 boulevard Saint-Michel, Paris, France</p>
												</div>
												<!-- EVENT DESCRIPTION -->
												<p>Meets the founders of the French success story. In collaboration with Pollen and MINES ParisTech</p>
												<div class="center">
													<a href="single-event.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<!-- END EVENT -->
			                    <li>
			                        <div class="slide">
										<div class="event">
											<div class="event-header">
												<a href="single-event2.html">
													<img src="images/event/2.jpg" alt="Event cover">
												</a>
											</div>
											<div class="event-content">
												<h3>Genius Meets Heetch</h3>
												<div class="event-data">
													<p><span class="icon icon-calendar"></span> October 14, 2015</p>
													<P><span class="icon icon-location"></span> 60 boulevard Saint-Michel, Paris, France </p>
												</div>
												<p>A interactive interview. You can watch it live on Twitter and ask your questions to the CEO of Uber's biggest competitor on Twitter with #GeniusMeetsHeetch</p>
												<div class="center">
													<a href="single-event2.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</li>
			                    <li>
			                        <div class="slide">
										<div class="event">
											<div class="event-header">
												<a href="single-event3.html">
													<img src="images/event/3.jpg" alt="Event cover">
												</a>
											</div>
											<div class="event-content">
												<h3>Start-up Night</h3>
												<div class="event-data">
													<p><span class="icon icon-calendar"></span> Decembre 8, 2015</p>
													<P><span class="icon icon-location"></span> 3 rue Juliot Curie, Plateau de Moulon, Gif-sur-Yvette, France</p>
												</div>
												<p>One night to create a Start-up ? Challenge accepted !</p>
												<div class="center">
													<a href="single-event3.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</li>
			                    <li>
			                        <div class="slide">
										<div class="event">
											<div class="event-header">
												<a href="single-event4.html">
													<img src="images/event/4.jpg" alt="Event cover">
												</a>
											</div>
											<div class="event-content">
												<h3>Genius Meets Pumpkins</h3>
												<div class="event-data">
													<p><span class="icon icon-calendar"></span> undefined</p>
													<P><span class="icon icon-location"></span> undefined</p>
												</div>
												<p>The founders of the mobile payment app come to introduce themselves. Come see them!</p>
												<div class="center">
													<a href="single-event4.html" class="btn btn-default">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<!-- LOAD MORE OPTION
			                    <li>
			                        <div class="slide">
										<div class="load-more">
											<div class="content">
												<a href="#" title="load more">
													<span class="icon icon-large icon-plus"></span>
													<h3>Load More Events</h3>
												</a>
											</div>
										</div>
									</div>
								</li>
								-->
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- END EVENTS SECTION -->
			
			
			<!-- START CONTACT SECTION -->
			<section id="contact" class="section with-arrow">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1>Let's Get In Touch</h1>
					<hr>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						<div class="row">	
							<!-- CONTACT TEXT -->
							<div class="col-md-6">
								<p>If you want to create your own Genius association, if you want to work with us or if you simply want to know more about us : contact us !</p>
								<!-- SOCIAL BUTTTONS -->
								<ul class="social-list">
									<li><a href="http://on.fb.me/1h0hKrc" class="btn btn-facebook"><span class="icon icon-facebook"></span> Like our Page on Facebook</a></li>
									<li><a href="http://bit.ly/1h0idd1" class="btn btn-twitter"><span class="icon icon-twitter"></span> Follow us on Twitter</a></li>
									<li><a href="http://bit.ly/1VhcrGL" class="btn btn-linkedin"><span class="icon icon-linkedin"></span> Follow us on Linkedin</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<!-- CONTACT FORM -->
				                <form class="form-horizontal" method="post" action="public.php" id="form">
				                  <div class="form-group">
				                    <label for="contact_name" class="col-lg-2 control-label">Name</label>
				                    <div class="col-lg-10">
				                      <input type="text" class="form-control" name="contact_name">
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <label for="contact_email" class="col-lg-2 control-label">Email</label>
				                    <div class="col-lg-10">
				                      <input type="email" class="form-control" name="contact_email">
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <label for="contact_textarea" class="col-lg-2 control-label">Message</label>
				                    <div class="col-lg-10">
				                      <textarea class="form-control" rows="3" name="contact_textarea"></textarea>
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <div class="col-lg-offset-2 col-lg-10">
				                      <input type="hidden" name="submitted" id="submitted" value="true" />
				                      <button type="submit" class="btn btn-default btn-send" name="submitted"><i data-icon="&#xe00d;"></i>Send</button>
				                    </div>
				                  </div>
				                </form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END CONTACT SECTION -->
			
			<!-- START FOOTER SECTION -->
			<section id="footer" class="section section-full-colored">
				<div class="section-content center">
					<p>Genius Global Website by Michael Pereira</p>
				</div>
			</section>
			<!-- END FOOTER SECTION -->
		
		</div>
		<!-- END MAIN CONTAINER -->
		
		<!-- PAGE LOADING-->
		<div id="loader"></div>
  	</div>
    <!-- SCRIPTS -->
    <script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/jquery.sequence-min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.smoothscroll.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>