<?php
include('./includes/header.inc.php');
include('./includes/navbar.inc.php');
include('./includes/sidebar.inc.php');
?>

  <body>
    <div class="container">
      <div class="hero-unit row-fluid board-transparent">
        <div class="span12 row-fluid">
          <div class="span2"><div class="red-circle">9.8</div></div>
          <div class="span10"><h3>CAMBRIDGE, MA</h3><h1>MARCO MORAWEC</h1></div>
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
      <div class="lifetime-container well board-transparent">
        <h1>LIFETIME</h1>
        <div class="lifetime-total row-fluid">
          <div class="span3"><h3>TOTAL WAVES</h3><h2 class="bignum">2073</h2></div>
          <div class="span3"><h3>TOTAL TRICKS</h3><h2 class="bignum">7653</h2></div>
          <div class="span3"><h3>TOTAL HOURS</h3><h2 class="bignum">142</h2></div>
          <div class="span3"><h3>TOTAL SET WAVES</h3><h2 class="bignum">367</h2></div>
        </div>
        <div class="lifetime-average row-fluid" id="test1">
          <div class="span3"><h3>AVG WAVES</h3><h2 class="bignum">47</h2></div>
          <div class="span3"><h3>AVG TRICKS</h3><h2 class="bignum">113</h2></div>
          <div class="span3"><h3>AVG HOURS</h3><h2 class="bignum">2.3</h2></div>
          <div class="span3"><h3>AVG SET WAVES</h3><h2 class="bignum">6</h2></div>
        </div>
      </div>

      <div class="drilldown-container well board-transparent">
        <h1 class="span12">Drilldown - Recent Sessions</h1>
          <div class="row-fluid session-slider span12" id="session-slider">
            <div class="row-fluid" style="margin-left:8%;">
              <h5 class="span2 arrow" id="slide-left" style="text-align: center;">&lt;</h5>
              <div id="slider-tab-container"></div>
              <h5 class="span2 arrow" id="slide-right" style="text-align: center">&gt;</h5>
            </div>
          </div>
          <div class="sessions" id="sessions"></div>
        </div>
      </div>
    </div> <!-- /container -->

<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
</div>

<!-- Start of the footer -->
<?php include('./includes/footer.inc.php'); ?>
<script src="js/surfscore-slider.js"></script>
<script>

$(document).ready(function() {
  $(".span5").click(function(e) {
  console.log(e);
  $('#myModal').modal('show')});
});

$(document).ready(function() {
  $(".sidebar-img").hover(function(e) {
  console.log(e);
});

</script>
