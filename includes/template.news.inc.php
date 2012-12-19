<?php 

// THIS IS THE TEMPLATE/PARENT FILE
// It contains all the layout for all pages -> you change shit here, it shows up on all pages (surf, snow, climb, etc.)
// If you want to have a change only show up on one page, go to that page and add the copy/styling there. It will override the parent file!
// If you don't know what all this means, talk to Marco

?>


<?php require_once './includes/ti.php' ?> 

<?php include ('./includes/headers.inc.php') ?>




<body> 
<div class="news-section" id="news-section"> <!-- news-section-background -->	

<?php include ('./includes/navbar.inc.php') // get the navbar in ?>


<!-- MAIN SITE CONTENT
================================================== -->
	

<!-- NEWS PAGE
================================================== -->

		
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




</div> <!-- End container -->




<div class="container">
</br>	
<?php include ('./includes/footer.inc.php') // get the footer in ?>

</div>	
	</body> 
</html>