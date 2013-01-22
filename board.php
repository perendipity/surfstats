

<?php include ('./includes/headers.inc.php') ?>

<body>
  
  <div class="board-background">
    
    <?php include ('./includes/navbar.inc.php') // get the navbar in ?>
    
    <div class="well-clear frost-layer container">
      
      <!-- <div class="row"> -->
      <!--   <img class="span3 rad-score pad-left" src="img/rad-score.jpg"> -->
      <!--   <div class="header span9"> -->
      <!--     <div class="head-sm2">NEW ENGLAND</div> -->
      <!--     <div class="head-large">MARCO MORAWEC</div> -->
      <!--   </div> -->
      <!-- </div> -->
      
      <br>
      <br>
      
      <div class="row-fluid pad-left" id="profile-container">
        <img class="span3 rad-score" src="img/rad-score.jpg">
        <div class="span9 pad-top">
          <span class="custom-h4">NEW ENGLAND</span><br>
          <span class="custom-h1">MARCO MORAWEC</span>
        </div>
      </div>

      <br>

      <div id="lifetime-container">
        <span class="custom-h2">LIFETIME</span>
        <br>
        <br>
        <div class="lifetime-total row-fluid">
          <div class="span3"><h3 class="custom-h3">TOTAL WAVES</h3><h2 class="bignum custom-h2">2073</h2></div>
          <div class="span3"><h3 class="custom-h3">TOTAL TRICKS</h3><h2 class="bignum custom-h2">7653</h2></div>
          <div class="span3"><h3 class="custom-h3">TOTAL WATERTIME</h3><h2 class="bignum custom-h2">142 HRS</h2></div>
          <div class="span3"><h3 class="custom-h3">TOTAL SET WAVES</h3><h2 class="bignum custom-h2">367</h2></div>
        </div>
        <br>
        <div class="lifetime-average row-fluid" id="test1">
          <div class="span3"><h3 class="custom-h3">AVG WAVES</h3><h2 class="bignum custom-h2">47</h2></div>
          <div class="span3"><h3 class="custom-h3">AVG TRICKS</h3><h2 class="bignum custom-h2">113</h2></div>
          <div class="span3"><h3 class="custom-h3">AVG WATERTIME</h3><h2 class="bignum custom-h2">2.3 HRS</h2></div>
          <div class="span3"><h3 class="custom-h3">AVG SET WAVES</h3><h2 class="bignum custom-h2">6</h2></div>
        </div>
      </div>

      <br>
      <br>

      <!-- Horizontal divider -->
      <ul class="nav nav-list">
    	<li class="divider"></li>
      </ul> <!-- End of Horizontal divider -->
      <br>


      <div id="drilldown-container">
        <span class="custom-h2">RECENT SESSIONS</span>
      </div>

      <br>
      <br>
      <br>
      <br>
  
      <div class="row graph">
        <div class="span4 ">
          <img src="img/graph-1.png">
          <!-- <div>Tuesday, March 9th</div> -->
        </div>
        
        <div class="span4">
          <img src="img/graph-2.png">
          <!-- <div>Friday, March 5th</div> -->
        </div>
        
        <div class="span4">
          <img src="img/graph-3.png">
          <!-- <div class="pad-sm">Wednesday, March 3rd</div> -->
        </div>
      </div>
      
      <div class="foot">
      </div>
      
      
    </div>
  </div> <!-- /container -->
  
  
  
  <!-- <div class="row pad-left"> -->
  <!--   <div class="span12"> -->
  <!--     <div class="header-medium">LIFETIME</div> -->
  <!--     <button class="btn btn-large custom-button1" type="button">LIST VIEW</button> -->
  <!--     <button class="btn btn-large custom-button2" type="button">CHART VIEW</button> -->
  <!--   </div> -->
  <!-- </div> -->
  
  
  <!-- <br> -->
  
  <!-- <div class="row"> -->
  <!--   <div class="span3 head-sm"> -->
  <!--     WAVES CAUGHT <br> -->
  <!--     <div class="scores">184</div> -->
  <!--   </div> -->
  
  <!--   <div class="span3 head-sm"> -->
  <!--     TOTAL TRICKS <br> -->
  <!--     <div class="scores">683</div> -->
  <!--   </div> -->
  
  <!--   <div class="span3 head-sm"> -->
  <!--     WATER TIME <br> -->
  <!--     <div class="scores">126 HRS</div> -->
  <!--   </div> -->
  
  <!--   <div class="span3 head-sm"> -->
  <!--     SET WAVES <br> -->
  <!--     <div class="scores">58</div> -->
  <!--   </div> -->
  <!-- </div> -->
  
 
  
  <!-- <div class="foot"> -->
  <!--   OLDER SESSIONS -->
  <!-- </div> -->
</div>
</div>  <!-- End of board section -->
<?php include ('./includes/footer.inc.php') // get the footer in ?>

</body>
</html>
