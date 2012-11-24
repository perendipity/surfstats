<?php include('./includes/header.inc.php'); ?>
<body>
  <?php
    include('./includes/navbar.inc.php');
  ?>
  <div class="home">
  <!-- Carousel ================================================== -->
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
        <img class="pull-less-right-pic" style="min-width:0%;max-height:300px;max-width:300px;" src="img/kooks.png">
      </div>
      <div class="item">
        <img class="pull-right-pic" style="min-width:0%;max-height:300px;max-width:554;" src="img/kahuna-kapu.png">
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
            <h2>Get Feedback.</h2>
            <p>Drill down on your session to get stats and info. Chill out with friends and
              compare scores.</p>
          </div>
          <div class="span3 offset1">
            <img class="img-circle" src="img/moments.png" width="200" height="200">
            <h2>Be Radical.</h2>
            <p>More waves. More tricks. Let Surfscore help you become a better surfer.</p>
          </div>
      </div> <!-- row -->

      <div class="featurette" style="margin-top:50px;">
        <img class="featurette-image pull-right" style="width:50%"
             src="img/kahuna.png">
        <h2 class="featurette-heading">Your progress, tracked. <span class="muted">Improve instantly.</span></h2>
      <p class="lead">Surfing is hard to learn and even <i>harder</i> to master. Why pay hundreds of dollars for mediocre feedback when you could just go surfing, track all your radical moves on the fly and see what's really happening in the water.</p>
    </div>

    <div class="featurette" style="margin-top:50px;">
      <img class="featurette-image pull-left" style="width:50%" src="img/kapu.png">
      <h2 class="featurette-heading">Your board is an extension of your body. <span class="muted">Get to know yourself better.</span></h2>
      <p class="lead">By incorporating basic movement data with weather conditions, we can form a clear picture of your skills and experiences.</p>
    </div>

    <div class="featurette" style="margin-top:50px;">
      <img class="featurette-image pull-right" style="width:50%" src="img/logo-large.png">
      <h2 class="featurette-heading">Rule the beach. <span class="muted">Compete with friends for glory.</span></h2>
      <p class="lead">Naturally everyone should hear all about your exploits as your
        skills grow. How do you compare to the pros?</p>
      <a class="btn btn-large"
         style="color:rgb(250,250,250);background-color:#ED1C24;background-image:none;margin-top:40px;min-width:250px;" 
         href="board.php">
        Try it out NOW! 
      </a>
    </div>
   </div> <!-- well-clear -->
   <?php include('./includes/footer.inc.php'); ?>
</html>
