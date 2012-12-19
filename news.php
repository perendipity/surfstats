<?php include './includes/template.news.inc.php' ?> 

<style>
	body {
			background-color: black;
			color: #FFFFFF;
		}
	
</style>

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
