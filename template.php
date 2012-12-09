<?php 

// THIS IS THE TEMPLATE/PARENT FILE
// It contains all the layout for all pages -> you change shit here, it shows up on all pages (surf, snow, climb, etc.)
// If you want to have a change only show up on one page, go to that page and add the copy/styling there. It will override the parent file!
// If you don't know what all this means, talk to Marco

?>


<?php require_once './includes/ti.php' ?> 

//Pull headers in from the 
<?php include ('./includes/headers.inc.php') ?>



<html> 
	<body> 
	
<?php include ('./includes/navbar.inc.php') // get the navbar in?>


<!-- MAIN SITE CONTENT
================================================== -->
	
	    <!-- SIGN-UP SECTION (page a visitor sees first)
    ================================================== -->



<div class="container">
	
	<div class="span8">
	
		<h1>
			<?php startblock('signup_title') ?> 
			<?php endblock() ?> 
		</h1> 
		<div id='article'> 
			<?php startblock('signup_article') ?> 
			<?php endblock() ?> 
		</div> 
	</div>
	
</div> <!-- End container -->

<!-- HOW IT WORKS. First -> Second -> Third
================================================== -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
			<?php startblock('howitworks_title') ?> 
			<?php endblock() ?> 
      </div><!-- /.row -->
<!-- DATA PAGE
================================================== -->

		<h1>
			<?php startblock('data_title') ?> 
			<?php endblock() ?> 
		</h1> 

<!-- SURFBOARD PAGE
================================================== -->

		<h1>
			<?php startblock('surfboard_title') ?> 
			<?php endblock() ?> 
		</h1> 


<!-- LEADERBOARD PAGE
================================================== -->

		<h1>
			<?php startblock('leaderboard_title') ?> 
			<?php endblock() ?> 
		</h1> 


<!-- KICK IT PAGE
================================================== -->

		<h1>
			<?php startblock('kickit_title') ?> 
			<?php endblock() ?> 
		</h1> 


<!-- TEAM PAGE
================================================== -->

		<h1>
			<?php startblock('team_title') ?> 
			<?php endblock() ?> 
		</h1> 









	
<?php include ('./includes/footer.inc.php') // get the footer in ?>

	
	</body> 
</html>