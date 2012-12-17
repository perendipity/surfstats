    <!-- NAVBAR
    ================================================== -->
    <div class="container navbar-wrapper">
      <div class="navbar navbar-inverse">
          <a class="surfscore-brand" href=".surfpage.php">surfscore</a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li <?php if ($currentPage == 'home.php') {
                 echo 'class="active"'; } ?>><a href="surfpage.php">home</a></li>
              <li <?php if ($currentPage == 'team.php') {
                echo 'class="active"'; } ?>><a href="#team-section">team</a></li>
              <li <?php if ($currentPage == 'dontbeakook.tumblr.com') {
                echo 'class="active"'; } ?>><a href="#news-section">blog</a></li>
              <li <?php if ($currentPage == 'contact.php') {
                echo 'class="active"'; } ?>><a href="contact.php">contact</a></li>
            </ul>            
		</div>
	</div>

    </div><!-- /.container -->
