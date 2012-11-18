<?php

include('./includes/header.inc.php');
include('./includes/navbar.inc.php');

include('./includes/sidebar.inc.php');
?>

  <body>
    <div class="container">
    <div class="container board-transparent">
      <div class="profile-container row-fluid " id="profile-container">
        <div class="span12 row-fluid">
          <div class="span2"><div class="red-circle surfscore">9.8</div></div>
          <div class="span10"><h3 class="location">NEW ENGLAND</h3><h1 class="user-name">MARCO MORAWEC</h1></div>
          <!-- <p>Surfer/Hacker from Cambridge. Member for 1 day.</p> -->
        </div>
       <!--  <div class="profile-pic span3">
          profile pic
          <ul class="thumbnails">
            <li class="span4">
              <a href="#" class="thumbnail">
                <img class="img-rounded" src="http://placehold.it/300x200" alt="">
              </a>
            </li>
          </ul>
        </div> -->
      </div>
      <div class="lifetime-container" id="lifetime-container">
        <h1 class="custom-h1">LIFETIME</h1>
        <div class="lifetime-total row-fluid">
          <div class="span3"><h3 class="custom-h3">TOTAL WAVES</h3><h2 class="bignum custom-h2">2073</h2></div>
          <div class="span3"><h3 class="custom-h3">TOTAL TRICKS</h3><h2 class="bignum custom-h2">7653</h2></div>
          <div class="span3"><h3 class="custom-h3">TOTAL WATERTOWN</h3><h2 class="bignum custom-h2">142 HRS</h2></div>
          <div class="span3"><h3 class="custom-h3">TOTAL SET WAVES</h3><h2 class="bignum custom-h2">367</h2></div>
        </div>
        <div class="lifetime-average row-fluid" id="test1">
          <div class="span3"><h3 class="custom-h3">AVG WAVES</h3><h2 class="bignum custom-h2">47</h2></div>
          <div class="span3"><h3 class="custom-h3">AVG TRICKS</h3><h2 class="bignum custom-h2">113</h2></div>
          <div class="span3"><h3 class="custom-h3">AVG WATERTOWN</h3><h2 class="bignum custom-h2">2.3 HRS</h2></div>
          <div class="span3"><h3 class="custom-h3">AVG SET WAVES</h3><h2 class="bignum custom-h2">6</h2></div>
        </div>
      </div>
		<!-- Horizontal divider -->
		<ul class="nav nav-list">
    		<li class="divider"></li>
    	</ul> <!-- End of Horizontal divider -->
      

      <div class="drilldown-container" id="drilldown-container">
        <h1 class="span12 custom-h1" style="text-align: center">RECENT SESSIONS</h1>
          <div class="row-fluid session-slider span12" id="session-slider">
            <div class="row-fluid" style="margin-left:8%;">
              <h5 class="span2 arrow custom-h5" id="slide-left" style="text-align: center;">&lt;</h5>
              <div id="slider-tab-container"></div>
              <h5 class="span2 arrow custom-h5" id="slide-right" style="text-align: center">&gt;</h5>
            </div>
          </div>
          <div class="sessions" id="sessions"></div>
        </div>
      </div>
    </div> <!-- /container -->


<!-- Start of the footer -->
<?php include('./includes/footer.inc.php'); ?>
<script src="js/surfscore-slider.js"></script>
<script type="text/javascript">

  $(document).ready(function() {
    $(".span5").click(function(e) {
    console.log(e);
    $('#myModal').modal('show')});
  });

 $(".sidebar-img").hover(function(e) {
    e.innerHTML = 'test';
    console.log(e);
  });

</script>



