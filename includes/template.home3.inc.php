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
	<div class="signup-section" id="signup-section"> <!-- Background image section -->
		<?php include ('./includes/navbar2.inc.php') // get the navbar in ?>


<!-- MAIN SITE CONTENT
================================================== -->
	
	    <!-- SIGN-UP SECTION (page a visitor sees first)
    ================================================== -->



<div class="container container-signup">
		<div class="row">
				<div class="span6 frost-layer-home"> <!-- Left Block -->
								
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
					
					<h3 class="custom-h3">
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
	</div> <!-- End of Background image section -->

</div> <!-- end of sign-up section container -->	










<?php include ('./includes/footer2.inc.php') // get the footer in ?>


</div> <!-- End container -->





<?php include ('./includes/backstretch.inc.php') // get the backstretch going ?>


</div>	
	</body> 
</html>