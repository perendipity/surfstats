

<?php include ('./includes/headers.inc.php') ?>

<body>

 <div class="board-background">


<?php include ('./includes/navbar.inc.php') // get the navbar in ?>


    <div class="well-clear frost-layer container">
      
      <div class="row">
        <img class="span3 rad-score pad-left" src="img/rad-score.jpg"></img>
        <div class="header span9">
          <div class="head-sm2">NEW ENGLAND</div>
          <div class="head-large">MARCO MORAWEC</div>
        </div>
      </div>

      <br>
      <br>

      <div class="row pad-left">
        <div class="span12">
          <div class="header-medium">LIFETIME</div>
          <button class="btn btn-large custom-button1" type="button">LIST VIEW</button>
          <button class="btn btn-large custom-button2" type="button">CHART VIEW</button>
        </div>
      </div>


      <br>

      <div class="row">
        <div class="span3 head-sm">
          WAVES CAUGHT <br>
          <div class="scores">184</div>
        </div>

        <div class="span3 head-sm">
          TOTAL TRICKS <br>
          <div class="scores">683</div>
        </div>

        <div class="span3 head-sm">
          WATER TIME <br>
          <div class="scores">126 HRS</div>
        </div>
        
        <div class="span3 head-sm">
          SET WAVES <br>
          <div class="scores">58</div>
        </div>
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

      <!-- <div class="foot"> -->
      <!--   OLDER SESSIONS -->
      <!-- </div> -->
    </div>
  </div>  <!-- End of board section -->
<?php include ('./includes/footer.inc.php') // get the footer in ?>
    
  </body>
</html>
