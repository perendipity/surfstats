<?php 

// THIS IS THE TEMPLATE/PARENT FILE
// It contains all the layout for all pages -> you change shit here, it shows up on all pages (surf, snow, climb, etc.)
// If you want to have a change only show up on one page, go to that page and add the copy/styling there. It will override the parent file!
// If you don't know what all this means, talk to Marco

?>


<?php require_once './includes/ti.php' ?> 

<?php include ('./includes/headers.inc.php') ?>




<body> 
<div class="background-section">
	<div class="signup-section"> <!-- Background image section -->
		<?php include ('./includes/navbar.inc.php') // get the navbar in ?>


<!-- MAIN SITE CONTENT
================================================== -->
	
	    <!-- SIGN-UP SECTION (page a visitor sees first)
    ================================================== -->



<div class="container container-signup">
		<div class="row">
				<div class="span6"> <!-- Left Block -->
								
					<h1 class="custom-h1">
						<?php startblock('signup_title') ?> 
						<?php endblock() ?> 
					</h1> 
					</br>
					<h2 class="custom-h2">
						<?php startblock('signup_h2') ?> 
						<?php endblock() ?> 
					</h2>
					 
					<h5 class="custom-h5">
						<?php startblock('signup_copy') ?> 
						<?php endblock() ?> 
					</h5>
					
					<br><h3 class="custom-h3">
						<?php startblock('signup_beta') ?> 
						<?php endblock() ?> 
					</h3>
					
						<?php startblock('signup_emailform') ?> 
						<?php endblock() ?>
						 
				</div> 	<!-- End of Left Block -->
					
					
				<div class="span5"> <!-- Middle Block -->		
						<?php startblock('signup_image') ?> 
						<?php endblock() ?> 
				</div> 	<!-- End of Middle Block -->
				

		</div> <!-- End of Row -->
		<!-- How it works title -->
			 	<h1 class="custom-h1">
					<?php startblock('howitworks_title') ?> 
					<?php endblock() ?>
				</h1>
		<!-- ./ How it works title -->
	</div> <!-- End of Background image section -->

</div> <!-- end of sign-up section container -->	

<!-- HOW IT WORKS. First -> Second -> Third
================================================== -->
<div class="howitworks-section" id="howitworks-section">		
  <div class="container">	
      <!-- Three columns of text below the carousel -->
				</br>
	<div class="container marketing">
      	<div class="row">
             	<div class="span4">
					<?php startblock('howitworks_point1') ?> 
					<?php endblock() ?> 
		        </div><!-- /.span4 -->
		        
             	<div class="span4">
					<?php startblock('howitworks_point2') ?> 
					<?php endblock() ?> 
		        </div><!-- /.span4 -->
		
             	<div class="span4">
					<?php startblock('howitworks_point3') ?> 
					<?php endblock() ?> 
		        </div><!-- /.span4 -->
				
      	</div><!-- /.row -->
	</div> <!-- /.container marketing -->
	</div> <!-- /.howitworks-section -->
</div< <!-- /. container -->
</div>


<!-- DATA PAGE
================================================== -->
<div class="data-section" id="data-section"> <!-- data-section-background -->	
		
	<div class="container">
		<div class="row">
				<div class="span6"> <!-- Left Block -->
				
				<div class="row"> <!-- nav Block -->
						<div class="span4">	
							<?php startblock('data_sidebar') ?>
							<?php endblock() ?> 
						</div>
				</div> 	<!-- End of nav Block -->
				
					<h1 class="custom-h1">
						<?php startblock('data_title') ?> 
						<?php endblock() ?> 
					</h1> 
					</br>
					<h2 class="custom-h2">
						<?php startblock('data_h2') ?> 
						<?php endblock() ?> 
					</h2>
					 
					<h5 class="custom-h5">
						<?php startblock('data_copy') ?> 
						<?php endblock() ?> 
					</h5>
					
						<?php startblock('signup_data') ?> 
						<?php endblock() ?>
						 
				</div> 	<!-- End of Left Block -->
					
					
				<div class="span3 offset1"> <!-- Middle Block -->		
						<?php startblock('data_image') ?> 
						<?php endblock() ?> 
				</div> 	<!-- End of Middle Block -->
			

		</div> <!-- End of Row -->	
	</div> 	<!-- End of container -->
</div> <!--./ data-section background -->




<!-- SURFBOARD PAGE
================================================== -->
<div class="surfboard-section" id="surfboard-section"> <!-- surfboard-section-background -->	
		
	<div class="container">
		<div class="row">
				<div class="span6"> <!-- Left Block -->
				
				<div class="row"> <!-- nav Block -->
						<div class="span4">	
							<?php startblock('surfboard_sidebar') ?>
							<?php endblock() ?> 
						</div>
				</div> 	<!-- End of nav Block -->
				
					<h1 class="custom-h1">
						<?php startblock('surfboard_title') ?> 
						<?php endblock() ?> 
					</h1> 
					</br>
					<h2 class="custom-h2">
						<?php startblock('surfboard_h2') ?> 
						<?php endblock() ?> 
					</h2>
					 
					<h5 class="custom-h5">
						<?php startblock('surfboard_copy') ?> 
						<?php endblock() ?> 
					</h5>
						 
						<?php startblock('signup_surfboard') ?> 
						<?php endblock() ?>
						 
				</div> 	<!-- End of Left Block -->
					
					
				<div class="span3"> <!-- Middle Block -->		
						<?php startblock('surfboard_image') ?> 
						<?php endblock() ?> 
				</div> 	<!-- End of Middle Block -->
			

		</div> <!-- End of Row -->	
	</div> 	<!-- End of container -->
</div> <!--./ surfboard-section background -->


<!-- LEADERBOARD PAGE
================================================== -->

<div class="leaderboard-section" id="leaderboard-section"> <!-- leaderboard-section-background -->	
		
	<div class="container">
		<div class="row">
				<div class="span6"> <!-- Left Block -->
				
				<div class="row"> <!-- nav Block -->
						<div class="span4">	
							<?php startblock('leaderboard_sidebar') ?>
							<?php endblock() ?> 
						</div>	
				</div> 	<!-- End of nav Block -->
				
					<h1 class="custom-h1">
						<?php startblock('leaderboard_title') ?> 
						<?php endblock() ?> 
					</h1> 
					</br>
					<h2 class="custom-h2">
						<?php startblock('leaderboard_h2') ?> 
						<?php endblock() ?> 
					</h2>
					 
					<h5 class="custom-h5">
						<?php startblock('leaderboard_copy') ?> 
						<?php endblock() ?> 
					</h5>
						 
						<?php startblock('signup_leaderboard') ?> 
						<?php endblock() ?>
						 
				</div> 	<!-- End of Left Block -->
					
					
				<div class="span3"> <!-- Middle Block -->		
						<?php startblock('leaderboard_image') ?> 
						<?php endblock() ?> 
				</div> 	<!-- End of Middle Block -->
			

		</div> <!-- End of Row -->	
	</div> 	<!-- End of container -->
</div> <!--./ leaderboard-section background -->


<?php include ('./includes/footer.inc.php') // get the footer in ?>


</div> <!-- End container -->





<?php include ('./includes/backstretch.inc.php') // get the backstretch going ?>


</div>	
	</body> 
</html>