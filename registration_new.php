<?php include('./includes/header.inc.php'); ?>
<?php include('./includes/navbar.inc.php'); ?>

    <body>
        <div class="row">
            <div class="span8 offset4">
            	<div class="signup-box">
	            	<h1 class="custom-h1">Want to be a Better Surfer</h1></br>
	            	<h4 class="custom-h3">Request Early Access!</h4>
	            	<h5 class="custom-h4">We update you via email when we're ready</h5></br>
					<!-- Begin email form -->
					<form id="email" action="./includes/db_surfscore_local.inc.php" method="post">
					   		<div id="signup-box signup-container" class="email input-append">
					   			<input size="20" id="appendedInputButton" type="email" required="" placeholder="Your email address" name="email">
					    		<button id="signup-button" class="btn btn-danger" type="submit">»</button>
					    	</div>	
						<script>					    	
							$(document).ready(function() {
							
							    $('.signup-button').submit(function() {
							      $('.signup-box').hide();
							      $('.signup-container').append('<p class ="signup-thanks">Thanks!</p>')
							    });
							
							 });	
						 </script>				    				
					</form>
				</div> <!-- End of signup-box -->
					
			</div>
        </div>
        
<?php include ('./includes/footer.inc.php'); ?>
    </body>
</html>

