   <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
   <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

    <div class="container navbar-wrapper">

      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <img class="logo pull-left" style="padding: 2px 4px 2px 2px;" href="home.php" src="./img/logonav_small.png" class="pull-left">
          <a class="brand" href="./home.php">Surfscore</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            <ul class="nav">
              <li <?php if ($currentPage == 'home.php') {
                 echo 'class="active"'; } ?>><a href="home.php">Home</a></li>
              <li <?php if ($currentPage == 'board.php') {
                 echo 'class="active"'; } ?>><a href="board.php">Dashboard</a></li>
              <li <?php if ($currentPage == 'leaderboard.php') {
                 echo 'class="active"'; } ?>><a href="leaderboard.php">Leaderboard</a></li>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

    </div><!-- /.container -->
            <ul class="nav">
  