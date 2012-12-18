


<?php include 'template.php' ?> 

<!-- Surf page specific styles
================================================== -->

<style>
	body {
			background-color: black;
			color: #FFFFFF;
		}
	
</style>



</head>

<!-- Start of Sign-up page -->

	<?php startblock('signup_title') ?> 
		Surf Better. Be Smart!
	<?php endblock() ?> 

	<?php startblock('signup_h2') ?> 
		Use surfscores' feedback &</br> 
		Start Surfing Better!  
	<?php endblock() ?>
	
	<?php startblock('signup_copy') ?> 
		This is the best thing since sliced bread. Track all your metrics, get better, see what's happening
		and improve consistently. Compete with friends and be the best surfer you could possibly be.  
	<?php endblock() ?>

	<?php startblock('signup_emailform') ?> 
		<!-- Begin email form -->
			<form id="email" action="./includes/db_surfscore.inc.php" method="post">
			   	<div class="email input-append">
			   		<input size="20" id="appendedInputButton" type="email" required="" placeholder="Your email address" name="email">
			    	<button class="btn btn-danger" type="submit">»</button>
			    </div>				
			</form>
	<?php endblock() ?>

	<?php startblock('signup_image') ?> 
		<img src="./img/surfscore/kooks.png" >  
	<?php endblock() ?>

	<?php startblock('signup_sidebar') ?> 
		<?php include './includes/sidebar.inc.php'; ?>
	<?php endblock() ?>

<!-- End of Sign-up page -->


<!-- Start of How it works page -->

		<?php startblock('howitworks_title') ?> 
			How it works
		<?php endblock() ?> 

		<?php startblock('howitworks_point1') ?> 
			<img class="" src="./img/surfscore/shred-o-meter.png">
			</br>
	        	<h2 class="custom-h2">Grab Your surfscore</h2>
	        	<h5 class="custom-h5">One small device to track all your data</h5>
	        	<p><a class="btn btn-success" href="#data-section">View details &raquo;</a></p>
		<?php endblock() ?> 

		<?php startblock('howitworks_point2') ?> 
			<img class="img-circle" src="./img/surfscore/surfing.png">
			</br>
	          	<h2 class="custom-h2">Go Surfing</h2>
	          	<h5 class="custom-h5">Surf hard. Go Radical. Be Yourself!</h5>
	          	<p><a class="btn btn-success" href="#">View details &raquo;</a></p>
		<?php endblock() ?> 
		
		<?php startblock('howitworks_point3') ?> 
			<img class="img-circle" src="./img/surfscore/surf_data.png">
			</br>
		        <h2 class="custom-h2">Get Detailed Feedback</h2>
		        <h5 class="custom-h5">Waves. Shredder Score. Ride Visualization</h5>
		        <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
		<?php endblock() ?> 
      
	
<!-- End of How it works page -->


<!-- Start of Data page -->

	<?php startblock('data_title') ?> 
		Get Feedback
	<?php endblock() ?> 
	
	<?php startblock('data_h2') ?> 
		Know What's Happening &</br> 
		Visualize Every Wave!  
	<?php endblock() ?>
	
	<?php startblock('data_copy') ?> 
		This is the best thing since sliced bread. Track all your metrics, get better, see what's happening
		and improve consistently. Compete with friends and be the best surfer you could possibly be.  
	<?php endblock() ?>

	<?php startblock('data_image') ?> 
		<img class="img-home" src="./img/surfscore/surf_data2.png" >  
	<?php endblock() ?>

	<?php startblock('data_sidebar') ?> 
		<?php include './includes/sidebar.inc.php'; ?>
	<?php endblock() ?>	
	
<!-- End of Data page -->


<!-- Start of Surfboard page -->

	<?php startblock('surfboard_title') ?> 
		One Simple Device
	<?php endblock() ?> 
	
	<?php startblock('surfboard_h2') ?> 
		Smaller than fin-plug.</br> 
		Battery Power for 6 Month!
	<?php endblock() ?>
	
	<?php startblock('surfboard_copy') ?> 
		This is the best thing since sliced bread. Track all your metrics, get better, see what's happening
		and improve consistently. Compete with friends and be the best surfer you could possibly be.  
	<?php endblock() ?>

	<?php startblock('surfboard_image') ?> 
		<img class="img-home" src="./img/surfscore/shred-o-meter.png" >  
	<?php endblock() ?>

	<?php startblock('surfboard_sidebar') ?> 
		<?php include './includes/sidebar.inc.php'; ?>
	<?php endblock() ?>	
	
<!-- End of surfboard page -->


<!-- Start of Leaderboard page -->

	<?php startblock('leaderboard_title') ?> 
		Surf Hard. Compete!
	<?php endblock() ?> 
	
	<?php startblock('leaderboard_h2') ?> 
		Surf with your Buddies</br> 
		Dominate the Leaderboard!  
	<?php endblock() ?>
	
	<?php startblock('leaderboard_copy') ?> 
		This is the best thing since sliced bread. Track all your metrics, get better, see what's happening
		and improve consistently. Compete with friends and be the best surfer you could possibly be.  
	<?php endblock() ?>

	<?php startblock('leaderboard_image') ?> 
		<img class="img-home" src="./img/surfscore/iphone_template2.png" >  
	<?php endblock() ?>

	<?php startblock('leaderboard_sidebar') ?> 
		<?php include './includes/sidebar.inc.php'; ?>
	<?php endblock() ?>	

<!-- End of Leaderboard page -->


<!-- Start of News page -->

	<?php startblock('news_title') ?> 
		What's Up at surfscore!
	<?php endblock() ?> 
	
	<?php startblock('news_h2') ?> 
		Get better, faster.</br> 
		Use surfscore. Win!  
	<?php endblock() ?>
	
	<?php startblock('news_copy') ?> 
		This is the best thing since sliced bread. Track all your metrics, get better, see what's happening
		and improve consistently. Compete with friends and be the best surfer you could possibly be.  
	<?php endblock() ?>

	<?php startblock('news_image') ?> 
		<img src="./img/surfscore/kooks.png" >  
	<?php endblock() ?>

	<?php startblock('news_sidebar') ?> 
		<?php include './includes/sidebar.inc.php'; ?>
	<?php endblock() ?>	

<!-- End of News page -->


<!-- Start of Team page -->
	<?php startblock('team_title') ?> 
		The surfscore Team
	<?php endblock() ?> 

	<?php startblock('team_h2') ?> 
		Who is helping you surf better
	<?php endblock() ?>
	
	 
<!-- Marco -->
	<?php startblock('team_marco_img') ?> 
		<img src="./img/team/marco_bw.jpg" >
	<?php endblock() ?> 
	
	<?php startblock('team_marco_h2') ?> 
		Marco Morawec
	<?php endblock() ?>
	
	<?php startblock('team_marco_copy') ?> 
		I surf waves wherever I can find them, do front-end web-dev stuff, and tell everyone that Google keeps calling me a Shoestring
		Travel Expert because I traveled to over 30 countries on less than $25 a day. Calling Germany, Hawaii and South Africa home I'm
		always on the search for the next cool idea to push surfscore.me forward. Love ice-cream and suck at ironing my shirts!
	<?php endblock() ?> 
	
<!-- Peter -->
	<?php startblock('team_peter_img') ?> 
		<img src="./img/team/peter_bw.jpg" >
	<?php endblock() ?> 

	<?php startblock('team_peter_h2') ?> 
		Peter Nachbaur
	<?php endblock() ?>
	
	<?php startblock('team_peter_copy') ?> 
		After diving headfirst down the cognitive science rabbit hole at Vassar College, I worked on a content curation platform at
		SmartBrief and an analytic platform for gaming at Warner Brothers. When I'm not dreaming up tools to make people smarter, I love
		cooking for friends, curling up with a book, and getting layout d's in Ultimate. I'm a San Francisco native that still likes to
		think of my nine year stint on the East Coast as a 'temporary phase'
	<?php endblock() ?> 
	
<!-- Cody -->
	<?php startblock('team_cody_img') ?> 
		<img src="./img/team/cody_bw.jpg" >
	<?php endblock() ?> 

	<?php startblock('team_cody_h2') ?> 
		Cody Canning
	<?php endblock() ?>
	
	<?php startblock('team_cody_copy') ?> 
	After receiving my B.A. in cognitive science from Vassar College, I'm back in my native Boston. Right now I'm doing research in
	robotics and pursuing a Ph.D. I spend my time outside the lab obsessing over hockey, drinking IPAs and following the tech industry.
	<?php endblock() ?> 
	
<!-- Alec -->
	<?php startblock('team_alec_img') ?> 
		<img src="./img/team/alec.jpg" >
	<?php endblock() ?> 

	<?php startblock('team_alec_h2') ?> 
		Alec Babala
	<?php endblock() ?>
	
	<?php startblock('team_alec_copy') ?> 
		I'm a California boy raised in New Hampshire, and I study industrial design at RISD. Being artsy-fartsy is in my nature, so my
		days always consist of thinking and making. I like to bring people together for any reason, but the only child in me does enjoy
		going on solo adventures with my board or bike. I wish I had more time to spend in the kitchen, to clean up the surfscore dishes.
	<?php endblock() ?> 

<!-- End of Team page -->


