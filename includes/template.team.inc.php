<?php 

// THIS IS THE TEMPLATE/PARENT FILE
// It contains all the layout for all pages -> you change shit here, it shows up on all pages (surf, snow, climb, etc.)
// If you want to have a change only show up on one page, go to that page and add the copy/styling there. It will override the parent file!
// If you don't know what all this means, talk to Marco

?>


<?php require_once './includes/ti.php' ?> 

<?php include ('./includes/headers.inc.php') ?>




<body> 
<div class="team-section" id="team-section"> <!-- team-section-background -->	

<?php include ('./includes/navbar.inc.php') // get the navbar in ?>


<!-- MAIN SITE CONTENT
================================================== -->
	

<!-- TEAM PAGE
================================================== -->
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




<?php include ('./includes/footer.inc.php') // get the footer in ?>

</div>	
	</body> 
</html>