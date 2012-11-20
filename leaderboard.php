<?php include('./includes/header.inc.php'); ?>
<body>
  
  <?php
    include('./includes/navbar.inc.php');
  ?>
  <!-- Header to the Leaderboards page -->
  
  
  <div class="well narrow-well">
    <h1 class="custom-h1" align="center">How do you stack up...</h1>
    
    
    <!-- Accordion contains different leaderboards -->
    <div class="accordion" id="leaderboard-charts">
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse"
             data-parent="#leaderboard-charts" href="#friends"
             style="text-align:center;padding:1px;color:#000000;">
            <h2 class="custom-h2">against your friends?</h2>
          </a>
        </div>
        <div id="friends" class="accordion-body collapse">
          <div class="accordion-inner">
            <table id="table" class="table tablesorter table-striped">
              <thead>
                 <tr>
                  <th id="th3" class="tableheader">Name
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Location
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Rad Score
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Waves Caught
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Wipeouts
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Marco Morawec</td>
                  <td>New England</td>
                  <td>9.8</td>
                  <td>8861</td>
                  <td>323</td>
                </tr>
                <tr>
                  <td>Nick Shikuma</td>
                  <td>Hawaii</td>
                  <td>9.7</td>
                  <td>8743</td>
                  <td>756</td>
                </tr>
                <tr>
                  <td>Bethany Warburton</td>
                  <td>Hawaii</td>
                  <td>8.7</td>
                  <td>6783</td>
                  <td>132</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse"
             data-parent="#leaderboard-charts" href="#national"
             style="text-align:center;padding:1px;color:#000000;">
            <h2 class="custom-h2">across the country?</h2>
          </a>
        </div>
        <div id="national" class="accordion-body collapse">
          <div class="accordion-inner">
            <table id="table2" class="table tablesorter table-striped">
              <thead>
                <tr>
                  <th id="th3" class="tableheader">Name
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Location
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Rad Score
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Waves Caught
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Wipeouts
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Marco Morawec</td>
                  <td>New England</td>
                  <td>9.8</td>
                  <td>8861</td>
                  <td>323</td>
                </tr>
                <tr>
                  <td>Nick Shikuma</td>
                  <td>Hawaii</td>
                  <td>9.7</td>
                  <td>8743</td>
                  <td>756</td>
                </tr>
                <tr>
                  <td>Bethany Warburton</td>
                  <td>Hawaii</td>
                  <td>8.7</td>
                  <td>6783</td>
                  <td>132</td>
                <tr>
                  <td>Albert Jacobs</td>
                  <td>Florida</td>
                  <td>5.3</td>
                  <td>5463</td>
                  <td>164</td>
                </tr>
                <tr>
                  <td>Harry Taft</td>
                  <td>California</td>
                  <td>5.7</td>
                  <td>200</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>Jenny Smith</td>
                  <td>Cambridge</td>
                  <td>8.7</td>
                  <td>6783</td>
                  <td>132</td>
                <tr>
                  <td>John Johnson</td>
                  <td>Boston</td>
                  <td>5.3</td>
                  <td>5463</td>
                  <td>164</td>
                </tr>
                <tr>
                  <td>Danny Clark</td>
                  <td>Oregon</td>
                  <td>5.7</td>
                  <td>200</td>
                  <td>65</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse"
             data-parent="#leaderboard-charts" href="#international"
             style="text-align:center;padding:1px;color:#000000;">
            <h2 class="custom-h2">around the world?</h2>
          </a>
        </div>
        <div id="international" class="accordion-body collapse">
          <div class="accordion-inner">
            <table id="table3" class="table tablesorter table-striped">
              <thead>
                <tr>
                  <th id="th3" class="tableheader">Name
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Location
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Rad Score
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Waves Caught
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                  <th class="tableheader">Wipeouts
                    <i class="icon-chevron-up pull-right"> </i>
                    <i class="icon-chevron-down pull-right"> </i>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Juan Alvarez</td>
                  <td>Brazil</td>
                  <td>8.7</td>
                  <td>6783</td>
                  <td>132</td>
                </tr>
                <tr>
                  <td>Sven Alsvik</td>
                  <td>Sweden</td>
                  <td>5.3</td>
                  <td>5463</td>
                  <td>164</td>
                </tr>
                <tr>
                  <td>Natalia Olsen</td>
                  <td>South Africa</td>
                  <td>5.7</td>
                  <td>200</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>Bethany Warburton</td>
                  <td>Hawaii</td>
                  <td>8.7</td>
                  <td>6783</td>
                  <td>132</td>
                </tr>
                <tr>
                  <td>Albert Jacobs</td>
                  <td>Florida</td>
                  <td>5.3</td>
                  <td>5463</td>
                  <td>164</td>
                </tr>
                <tr>
                  <td>Harry Taft</td>
                  <td>California</td>
                  <td>5.7</td>
                  <td>200</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>Jenny Smith</td>
                  <td>Cambridge</td>
                  <td>8.7</td>
                  <td>6783</td>
                  <td>132</td>
                <tr>
                  <td>John Johnson</td>
                  <td>Boston</td>
                  <td>5.3</td>
                  <td>5463</td>
                  <td>164</td>
                </tr>
                <tr>
                  <td>Danny Clark</td>
                  <td>Cambridge</td>
                  <td>5.7</td>
                  <td>200</td>
                  <td>65</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <a class="btn btn-large"
       style="color:rgb(250,250,250);margin-right:40%;margin-left:38%;background-color:#ED1C24;background-image:none;margin-top:20px;min-width:250px;" 
       href="registration.php">
      Request Early Access! 
    </a>
  </div>
</body>
<?php include('./includes/footer.inc.php'); ?>
<script type="text/javascript" id="js">
  $(document).ready(function() {
    $('#table').bind('click', function() {
      $('#th1').siblings().css({'border-bottom':'none', 'background-color':'inherit'});
      $('#th1').css({'border-bottom':'10px solid red', 'background-color':'white'});
      $('#th2').siblings().css({'border-bottom':'none', 'background-color':'inherit'});
      $('#th2').css({'border-bottom':'10px solid red', 'background-color':'white'});
      $('#th3').siblings().css({'border-bottom':'none', 'background-color':'inherit'});
      $('#th3').css({'border-bottom':'10px solid red', 'background-color':'white'});
    });
    $('#table').trigger('click');
    // call the tablesorter plugin
    $("#table").tablesorter({sortList: [[2,1]],});
    $("#table2").tablesorter({sortList: [[2,1]],});
    $("#table3").tablesorter({sortList: [[2,1]],});
    $(".tableheader").click(function() {
      console.log(this);
      $(this).siblings().css({'border-bottom':'none', 'background-color':'inherit'});
      $(this).css({'border-bottom':'10px solid red', 'background-color':'white'}); }
                           );
    
  });
</script>
</html>
