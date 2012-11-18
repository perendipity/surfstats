<?php include('./includes/header.inc.php'); ?>
<body>
  <?php
    include('./includes/navbar.inc.php');
    include('./includes/sidebar.inc.php');
  ?>
  <div class="home">
  <!-- Carousel ================================================== -->
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
        <div class="container">
          <img class="pull-right-pic" style="min-width:0%;" src="img/kooks.png">
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
  </div><!-- /.carousel -->
    
  <!-- Marketing messaging and featurettes
       ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
   <div class="well-clear"> 
      <!-- Three columns of text below the carousel -->
      <div class="row">
          <div class="span3">
            <img class="img-circle" src="img/lifetime.png" width="200" height="200">
            <h2>Catch Waves.</h2>
            <p>Grab your board, head to the beach and hit the waves. Surfscore will take
              care of the rest.</p>
          </div>
          <div class="span3 offset1">
            <img class="img-circle" src="img/drilldown.png" width="200" height="200">
            <h2>Get Your Scores.</h2>
            <p>Drill down on your session to get stats and info. Chill out with friends and
              compare scores.</p>
          </div>
          <div class="span3 offset1">
            <img class="img-circle" src="img/moments.png" width="200" height="200">
            <h2>Be More Radical.</h2>
            <p>More waves. More tricks. Let Surfscore help you become a better surfer.</p>
          </div>
      </div> <!-- row -->
     
      <div class="featurette" style="margin-top:50px;">
        <img class="featurette-image pull-right"
             src="img/examples/browser-icon-chrome.png">
        <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
        
    <div class="featurette" style="margin-top:50px;">
      <img class="featurette-image pull-left" src="img/examples/browser-icon-firefox.png">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    
    <div class="featurette" style="margin-top:50px;">
      <img class="featurette-image pull-right" src="img/examples/browser-icon-safari.png">
      <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
 
   </div> <!-- well-clear -->
       
    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2012 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    
  </div><!-- /.container -->
  
  
  
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
  <script>
    !function ($) {
    $(function(){
    // carousel demo
    $('#myCarousel').carousel()
    })
    }(window.jQuery)
  </script>
</body>
</html>
