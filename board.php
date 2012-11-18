<?php include('./includes/header.inc.php'); ?>


  <body>

<?php

include('./includes/navbar.inc.php');

include('./includes/sidebar.inc.php');

?>


    <div class="container">
      <div class="hero-unit row-fluid" id="test">
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
        <div class="lifetime-average row-fluid" id="test1">
          <div class="span3"><h4>Waves</h4><h3>47</h3></div>
          <div class="span3"><h4>Tricks</h4><h3>113</h3></div>
          <div class="span3"><h4>Hours</h4><h3>2.3</h3></div>
          <div class="span3"><h4>Set Waves</h4><h3>6</h3></div>
        </div>
      </div>

      <div class="drilldown-container well">
        <h1 class="span12">Drilldown</h1>
          <div class="row-fluid session-slider span12" id="session-slider">
            <div class="row-fluid">
              <div class="span1 offset1 arrow" id="slide-left">&lt;</div>
              <div id="slider-tab-container"></div>
              <div class="span2 arrow" id="slide-right">&gt;</div>
            </div>
          </div>
          <div class="sessions" id="sessions"></div>
        </div>
      </div>
    </div> <!-- /container -->


<!-- Start of the footer -->
<?php include('./includes/footer.inc.php'); ?>
<script src="js/surfscore-slider.js"></script>

