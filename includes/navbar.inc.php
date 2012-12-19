    <!-- NAVBAR
    ================================================== -->
    <div class="container navbar-wrapper">
      <div class="navbar navbar-inverse">
          <a class="surfscore-brand" href="home.php">surfscore</a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li <?php if ($currentPage == 'home.php') {
                 echo 'class="active"'; } ?>><a href="home.php">home</a></li>
              <li <?php if ($currentPage == 'team.php') {
                echo 'class="active"'; } ?>><a href="team.php">team</a></li>
              <li <?php if ($currentPage == 'news.php') {
                echo 'class="active"'; } ?>><a href="news.php">news</a></li>
              <li <?php if ($currentPage == 'contact.php') {
                echo 'class="active"'; } ?>><a href="#">contact</a></li>
            </ul>            
		</div>
	</div>

    </div><!-- /.container -->
