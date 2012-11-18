<?php include('./includes/header.inc.php'); ?>
<body>
  <?php
    include('./includes/navbar.inc.php');
    include('./includes/sidebar.inc.php');
    
     ?>
  <!-- Carousel ================================================== -->
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/examples/slide-01.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Header</h1>
            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <a class="btn btn-large btn-primary" href="#">Sign up today</a>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="img/examples/slide-02.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <a class="btn btn-large btn-primary" href="#">Learn more</a>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="img/examples/slide-03.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>One more for good measure.</h1>
            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
          </div>
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
    
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="span4">
        <img class="img-circle" src="http://placehold.it/140x140">
        <h2>Catch Waves.</h2>
        <p>Grab your board, head to the beach and hit the waves. Surfscore will take
          care of the rest.</p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
      </div><!-- /.span4 -->
      <div class="span4">
        <img class="img-circle" src="http://placehold.it/140x140">
        <h2>Get Your Surfscore.</h2>
        <p>Drill down on your session to get stats and info. Chill out with friends and
          compare scores.</p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
      </div><!-- /.span4 -->
      <div class="span4">
        <img class="img-circle" src="http://placehold.it/140x140">
        <h2>Be More Radical.</h2>
        <p>More waves. More tricks. Let Surfscore help you become a better surfer.</p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
      </div><!-- /.span4 -->
    </div><!-- /.row -->
    
    
    <!-- START THE FEATURETTES -->
    
    <hr class="featurette-divider">
    
    <div class="featurette">
      <img class="featurette-image pull-right" src="img/examples/browser-icon-chrome.png">
      <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    
    <hr class="featurette-divider">
    
    <div class="featurette">
      <img class="featurette-image pull-left" src="img/examples/browser-icon-firefox.png">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    
    <hr class="featurette-divider">
    
    <div class="featurette">
      <img class="featurette-image pull-right" src="img/examples/browser-icon-safari.png">
      <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    
    <hr class="featurette-divider">
    
    <!-- /END THE FEATURETTES -->
    
    
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
