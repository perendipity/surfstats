    <!-- NAVBAR
    ================================================== -->
    <div class="container navbar-wrapper">
      <div class="navbar navbar-inverse">
      	<div class="span1 logo">
      		<img src="./img/surfscore/surfscore-logo.png">
      	</div>
          <a class="surfscore-brand" href="home.php">surfscore</a>
          <div class="nav-collapse">
            <ul class="nav pull-right nav-links">
              <li <?php if ($currentPage == 'home.php') {
                echo 'class="active"'; } ?>><a href="home.php#howitworks-section">How It Works</a></li>
              <li <?php if ($currentPage == 'home.php') {
                echo 'class="active"'; } ?>><a href="home.php#data-section">Features</a></li>
              <li <?php if ($currentPage == 'sign-up.php') {
                echo 'class="active"'; } ?>><a href="#">Sign-Up</a></li>
            </ul>            
		</div>
	</div>

    </div><!-- /.container -->
