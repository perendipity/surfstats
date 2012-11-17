<?php include('./includes/header.inc.php'); ?>


  <body>

<?php

include('./includes/navbar.inc.html');

include('./includes/sidebar.inc.php');

?>


    <div class="container">
      <div class="hero-unit row-fluid">
        <div class="span6">
          <h1>Marco's Surfstats</h1>
          <p>Surfer/Hacker from Cambridge. Member for 1 day.</p>
          <p>
            <a class="btn btn-primary btn-large">
              Surfscore: 9.8
            </a>
          </p>
        </div>
        <div class="profile-pic span6">
          profile pic
          <ul class="thumbnails">
            <li class="span4">
              <a href="#" class="thumbnail">
                <img class="img-rounded" src="http://placehold.it/300x200" alt="">
              </a>
            </li>
        </ul>
        </div>
      </div>
      <div class="lifetime-container well">
        <h1>Lifetime</h1>
        <h2>Totals</h2>
        <div class="lifetime-total row-fluid">
          <div class="span3"><h4>Waves</h4><h3>2073</h3></div>
          <div class="span3"><h4>Tricks</h4><h3>7653</h3></div>
          <div class="span3"><h4>Hours</h4><h3>142</h3></div>
          <div class="span3"><h4>Set Waves</h4><h3>367</h3></div>
        </div>
        <h2>Averages</h2>
        <div class="lifetime-average row-fluid">
          <div class="span3"><h4>Waves</h4><h3>47</h3></div>
          <div class="span3"><h4>Tricks</h4><h3>113</h3></div>
          <div class="span3"><h4>Hours</h4><h3>2.3</h3></div>
          <div class="span3"><h4>Set Waves</h4><h3>6</h3></div>
        </div>
      </div>


      <div class="dashboard-container well">
        <h1 class="span12">Dashboard</h1>
        <h2 class="span12">Session #54</h2>
        <div class="session row-fluid">
          <div class="session-stats span1 offset1">
            <h3>Stats</h3>
            <p>Radical: 7.9</p>
            <p>27 waves</p>
            <p>89 tricks</p>
          </div>
          <div class="session-charts span10 row-fluid">
            <h3 class="span10">Charts</h3>
            <div class="span5"><img class="img-rounded" src="http://placehold.it/300x200" alt=""></div>
            <div class="span5"><img class="img-rounded" src="http://placehold.it/300x200" alt=""></div>

            <div class="span5"><img class="img-rounded" src="http://placehold.it/300x200" alt=""></div>
            <div class="span5"><img class="img-rounded" src="http://placehold.it/300x200" alt=""></div>

          </div>
        </div>
      </div>
    </div> <!-- /container -->


<!-- Start of the footer -->

<?php include('./includes/footer.inc.php'); ?>

<!-- End of the footer -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
