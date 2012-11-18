


<?php
include('./includes/header.inc.php');
include('./includes/navbar.inc.php');
include('./includes/sidebar.inc.php');

?>

  <body>
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
