


<?php include './includes/template.home2.inc.php' ?> 

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
		Improve Your Surfing
	<?php endblock() ?> 

	<?php startblock('signup_h2') ?> 
		Track Each Wave. Surf Better</br> 
	<?php endblock() ?>
	
	<?php startblock('signup_copy') ?> 
		Track all your metrics, get better, see what's happening
		and improve consistently. Compete with friends and be the best surfer you could possibly be.  
	<?php endblock() ?>
	
	<?php startblock('signup_beta') ?> 
		Request Early Access Now!
	<?php endblock() ?> 

	<?php startblock('signup_emailform') ?> 
		<!-- Begin email form -->
			<form id="email" action="" method="post">
			   	<div class="email input-append">
			   		<input size="20" id="appendedInputButton" type="email" required="" placeholder="Your email address" name="email">
			    	<button class="btn btn-danger" type="submit">»</button>
			    </div>				
			</form>
	<?php endblock() ?>

	<?php startblock('signup_image') ?> 
		<!--<img class="img-home" src="./img/surfscore/phone_tablet.png" >  -->
	<?php endblock() ?>

	<?php startblock('signup_sidebar') ?> 
	<?php endblock() ?>
	
		<?php startblock('howitworks_title') ?> 
			How It Works
		<?php endblock() ?> 

<!-- End of Sign-up page -->


<!-- Start of How it works page -->


		<?php startblock('howitworks_point1') ?> 
			<a class="how-it-works-link" href="#surfboard-section">
				<img class="" src="./img/surfscore/score2.png">
				</br>
		        	<h2 class="custom-h2">Mount Your surfscore</h2>
		        	<h5 class="custom-h5">One small device to track all your data</h5>
	        </a>	
		<?php endblock() ?> 

		<?php startblock('howitworks_point2') ?>
			<a class="how-it-works-link" href="#leaderboard-section">
				<img class="img-circle" src="./img/surfscore/surfing.png">
				</br>
		          	<h2 class="custom-h2">Go Surfing</h2>
		          	<h5 class="custom-h5">Surf hard. Go Radical. Be Yourself!</h5>
	        </a>	
		<?php endblock() ?> 
		
		<?php startblock('howitworks_point3') ?> 
			<a class="how-it-works-link" href="#data-section">
				<img class="img-circle" src="./img/surfscore/surf_data.png">
				</br>
			        <h2 class="custom-h2">Get Detailed Feedback</h2>
			        <h5 class="custom-h5">Waves. Shredder Score. Ride Visualization</h5>
			</a>
		<?php endblock() ?> 
      
	
<!-- End of How it works page -->

<!-- Start of Surfboard page -->

	<?php startblock('surfboard_sidebar') ?> 
		<?php include './includes/sidebar.inc.php'; ?>
	<?php endblock() ?>	

	<?php startblock('surfboard_title') ?> 
		One Simple Device
	<?php endblock() ?> 
	
	<?php startblock('surfboard_h2') ?> 
		Smaller than a fin-plug.</br> 
		Battery Power for multiple sessions!
	<?php endblock() ?>
	
	<?php startblock('surfboard_copy') ?> 
		Use the same device to track all your metrics for any sport. 
		Easily syncs data with your smartphone after you're done surfing.
	<?php endblock() ?>
	
	<?php startblock('signup_surfboard') ?> 
			<!-- </br><a href="signup.php"><button class="pull-right btn btn-large btn-danger"><h1 class="custom-h1">Sign-Up</h1></button></a> -->
	<?php endblock() ?>

	<?php startblock('surfboard_image') ?> 
		<img class="img-home" src="./img/surfscore/score2.png" >  
	<?php endblock() ?>

	
<!-- End of surfboard page -->


<!-- Start of Data page -->

	<?php startblock('data_sidebar') ?> 
		<?php include './includes/sidebar.inc.php'; ?>
	<?php endblock() ?>	

	<?php startblock('data_title') ?> 
		See Every Wave
	<?php endblock() ?> 
	
	<?php startblock('data_h2') ?> 
		Get Your Stats &</br> 
		Know What's Happening!  
	<?php endblock() ?>
	
	<?php startblock('data_copy') ?> 
		Track all your metrics, get better and improve consistently.  
		Save every single ride of your life on one platform.
	<?php endblock() ?>
	
	<?php startblock('signup_data') ?> 
			</br><a href="board.php"><button class="pull-right btn btn-large btn-danger"><h1 class="custom-h1">Check my Stats</h1></button></a>
	<?php endblock() ?>
	
	<?php startblock('data_image') ?> 
		<img class="img-home" src="./img/surfscore/surf_data2.pn" >  
	<?php endblock() ?>

	
<!-- End of Data page -->



<!-- Start of Leaderboard page -->

	<?php startblock('leaderboard_sidebar') ?> 
		<?php include './includes/sidebar.inc.php'; ?>
	<?php endblock() ?>	

	<?php startblock('leaderboard_title') ?> 
		Surf Hard. Compete!
	<?php endblock() ?> 
	
	<?php startblock('leaderboard_h2') ?> 
		Challenge Your Friends</br> 
		Dominate the Leaderboard!  
	<?php endblock() ?>
	
	<?php startblock('leaderboard_copy') ?> 
		Know who surfed your spot the best after every session. 
		Compete with friends and see how you stack up.  
	<?php endblock() ?>
	
	<?php startblock('signup_leaderboard') ?> 
			<!--</br><a href="signup.php"><button class="pull-right btn btn-large btn-danger"><h1 class="custom-h1">Sign-Up</h1></button></a>-->
	<?php endblock() ?>

	<?php startblock('leaderboard_image') ?> 
		<?php include './includes/leaderboard.inc.php' ?>
		<!--<img class="img-home" src="./img/surfscore/iphone_template2.png" >  -->
	<?php endblock() ?>


<!-- End of Leaderboard page -->






