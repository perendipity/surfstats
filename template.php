<?php 

// THIS IS THE TEMPLATE/PARENT FILE
// It contains all the layout for all pages -> you change shit here, it shows up on all pages (surf, snow, climb, etc.)
// If you want to have a change only show up on one page, go to that page and add the copy/styling there. It will override the parent file!
// If you don't know what all this means, talk to Marco

?>


<?php require_once './includes/ti.php' ?> 

<?php include ('./includes/headers.inc.php') ?>




<body> 
<div class="signup-section"> <!-- Background image section -->
	<?php include ('./includes/navbar.inc.php') // get the navbar in ?>


<!-- MAIN SITE CONTENT
================================================== -->
	
	    <!-- SIGN-UP SECTION (page a visitor sees first)
    ================================================== -->



<div class="container container-signup">
		<div class="row">
				<div class="span5"> <!-- Left Block -->
				
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
					</br>	
						<?php startblock('signup_emailform') ?> 
						<?php endblock() ?>
						 
				</div> 	<!-- End of Left Block -->
					
					
				<div class="span3"> <!-- Middle Block -->		
						<?php startblock('signup_image') ?> 
						<?php endblock() ?> 
				</div> 	<!-- End of Middle Block -->
			
				<div class="span1 offset3"> <!-- Right Block -->		
						<?php startblock('signup_sidebar') ?>
						<?php endblock() ?> 
				</div> 	<!-- End of Right Block -->
	

		</div> <!-- End of Row -->	
	</div> <!-- End of Background image section -->

</div> <!-- end of sign-up section container -->	

<!-- HOW IT WORKS. First -> Second -> Third
================================================== -->
<div class="container">	
	<div class="howitworks-section">		
      <!-- Three columns of text below the carousel -->
	 			<h1 class="custom-h1">
					<?php startblock('howitworks_title') ?> 
					<?php endblock() ?> 
				</h1>
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
<div class="data-section"> <!-- data-section-background -->	
		
	<div class="container">
		<div class="row">
				<div class="span5"> <!-- Left Block -->
				
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
						 
				</div> 	<!-- End of Left Block -->
					
					
				<div class="span3"> <!-- Middle Block -->		
						<?php startblock('data_image') ?> 
						<?php endblock() ?> 
				</div> 	<!-- End of Middle Block -->
			
				<div class="span1 offset3"> <!-- Right Block -->		
						<?php startblock('data_sidebar') ?>
						<?php endblock() ?> 
				</div> 	<!-- End of Right Block -->	

		</div> <!-- End of Row -->	
	</div> 	<!-- End of container -->
</div> <!--./ data-section background -->




<!-- SURFBOARD PAGE
================================================== -->
<div class="surfboard-section"> <!-- surfboard-section-background -->	
		
	<div class="container">
		<div class="row">
				<div class="span5"> <!-- Left Block -->
				
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
						 
				</div> 	<!-- End of Left Block -->
					
					
				<div class="span3"> <!-- Middle Block -->		
						<?php startblock('surfboard_image') ?> 
						<?php endblock() ?> 
				</div> 	<!-- End of Middle Block -->
			
				<div class="span1 offset3"> <!-- Right Block -->		
						<?php startblock('surfboard_sidebar') ?>
						<?php endblock() ?> 
				</div> 	<!-- End of Right Block -->	

		</div> <!-- End of Row -->	
	</div> 	<!-- End of container -->
</div> <!--./ surfboard-section background -->


<!-- LEADERBOARD PAGE
================================================== -->

<div class="leaderboard-section"> <!-- leaderboard-section-background -->	
		
	<div class="container">
		<div class="row">
				<div class="span5"> <!-- Left Block -->
				
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
						 
				</div> 	<!-- End of Left Block -->
					
					
				<div class="span3"> <!-- Middle Block -->		
						<?php startblock('leaderboard_image') ?> 
						<?php endblock() ?> 
				</div> 	<!-- End of Middle Block -->
			
				<div class="span1 offset3"> <!-- Right Block -->		
						<?php startblock('leaderboard_sidebar') ?>
						<?php endblock() ?> 
				</div> 	<!-- End of Right Block -->	

		</div> <!-- End of Row -->	
	</div> 	<!-- End of container -->
</div> <!--./ leaderboard-section background -->

<!-- NEWS PAGE
================================================== -->

<div class="news-section"> <!-- news-section-background -->	
		
	<div class="container">
		<div class="row">
				<div class="span5"> <!-- Left Block -->
				
					<h1 class="custom-h1">
						<?php startblock('news_title') ?> 
						<?php endblock() ?> 
					</h1> 
					</br>
					<h2 class="custom-h2">
						<?php startblock('news_h2') ?> 
						<?php endblock() ?> 
					</h2>
					 
					<h5 class="custom-h5">
						<?php startblock('news_copy') ?> 
						<?php endblock() ?> 
					</h5>
						 
				</div> 	<!-- End of Left Block -->
					
					
				<div class="span3"> <!-- Middle Block -->		
						<?php startblock('news_image') ?> 
						<?php endblock() ?> 
				</div> 	<!-- End of Middle Block -->
			
				<div class="span1 offset3"> <!-- Right Block -->		
						<?php startblock('news_sidebar') ?>
						<?php endblock() ?> 
				</div> 	<!-- End of Right Block -->	

		</div> <!-- End of Row -->	
	</div> 	<!-- End of container -->
</div> <!--./ news-section background -->


<!-- TEAM PAGE
================================================== -->
<div class="team-section"> <!-- team-section-background -->	
	<div class="container">
		<!-- Headline Section -->
			<h1 class="custom-h1">
				<?php startblock('team_title') ?> 
				<?php endblock() ?> 
			</h1> 
			</br>
			<h2 class="custom-h2">
				<?php startblock('team_h2') ?> 
				<?php endblock() ?> 
			</h2>
			</br>
			</br>
		<!-- ./ Headline Section -->
					
		<!-- Team Member Section -->
		<div class="row">	
			<div class="span6">	
				<div class="row">
					<div class="span2">
						<?php startblock('team_marco_img') ?> 
						<?php endblock() ?> 
					</div>
					<div class="span4">
						<h2 class="custom-h2">
							<?php startblock('team_marco_h2') ?> 
							<?php endblock() ?> 
						</h2>
					</div>	
					<div class="span4">
						<h5 class="custom-h5">
							<?php startblock('team_marco_copy') ?> 
							<?php endblock() ?> 
						</h5>
					</div>
				</div>
			</div>
			<div class="span6">	
				<div class="row">
					<div class="span2">
						<?php startblock('team_peter_img') ?> 
						<?php endblock() ?> 
					</div>
					<div class="span4">
						<h2 class="custom-h2">
							<?php startblock('team_peter_h2') ?> 
							<?php endblock() ?> 
						</h2>
					</div>	
					<div class="span4">
						<h5 class="custom-h5">
							<?php startblock('team_peter_copy') ?> 
							<?php endblock() ?> 
						</h5>
					</div>
				</div>
			</div>
	
		</div><!-- ./ row -->
		</br></br>
		<div class="row">	
			<div class="span6">	
				<div class="row">
					<div class="span2">
						<?php startblock('team_cody_img') ?> 
						<?php endblock() ?> 
					</div>
					<div class="span4">
						<h2 class="custom-h2">
							<?php startblock('team_cody_h2') ?> 
							<?php endblock() ?> 
						</h2>
					</div>	
					<div class="span4">
						<h5 class="custom-h5">
							<?php startblock('team_cody_copy') ?> 
							<?php endblock() ?> 
						</h5>
					</div>
				</div>
			</div>
			<div class="span6">	
				<div class="row">
					<div class="span2">
						<?php startblock('team_alec_img') ?> 
						<?php endblock() ?> 
					</div>
					<div class="span4">
						<h2 class="custom-h2">
							<?php startblock('team_alec_h2') ?> 
							<?php endblock() ?> 
						</h2>
					</div>	
					<div class="span4">
						<h5 class="custom-h5">
							<?php startblock('team_alec_copy') ?> 
							<?php endblock() ?> 
						</h5>
					</div>
				</div>
			</div>
	
		</div><!-- ./ row -->

	<!-- ./ Team Member Section -->
					
</div> <!--./ team-section background -->

</div> <!-- End container -->




<div class="container">
</br>	
<?php include ('./includes/footer.inc.php') // get the footer in ?>

</div>	
	</body> 
</html>