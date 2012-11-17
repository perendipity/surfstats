<?php include('./includes/header.inc.php'); ?>
  <body>

<?php
include('./includes/navbar.inc.php');
include('./includes/sidebar.inc.php');
?>
<!-- Header to the Leaderboards page -->
    <h1 align="center">Leaderboards</h1>

    <!-- Accordion contains different leaderboards -->
    <div class="accordion" id="leaderboard-charts">
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#leaderboard-charts" href="#friends">
            Friends
          </a>
        </div>
        <div id="friends" class="accordion-body collapse in">
          <div class="accordion-inner">              
            <table class="table tablesorter table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Best Sesh</th>
                  <th>Average Sesh</th>
                  <th>Waves</th>
                  <th>Tricks</th>
                  <th>Set Waves</th>
                  <th>Water Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Bethany Warburton</th>
                  <td>9.9</td>
                  <td>8.7</td>
                  <td>6783</td>
                  <td>12345</td>
                  <td>456</td>
                  <td>763</td>
                </tr>
                <tr>
                  <td>Sven Alsvik</th>
                  <td>9.8</td>
                  <td>8.6</td>
                  <td>5463</td>
                  <td>10020</td>
                  <td>400</td>
                  <td>654</td>
                </tr>
                <tr>
                  <td>Natalia Olsen</td>
                  <td>5.6</td>
                  <td>3.4</td>
                  <td>200</td>
                  <td>554</td>
                  <td>23</td>
                  <td>107</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#leaderboard-charts" href="#national">
            National
          </a>
        </div>
        <div id="national" class="accordion-body collapse">
          <div class="accordion-inner">
            <table class="table tablesorter table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Best Sesh</th>
                  <th>Average Sesh</th>
                  <th>Waves</th>
                  <th>Tricks</th>
                  <th>Set Waves</th>
                  <th>Water Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Bethany Warburton</th>
                  <td>9.9</td>
                  <td>8.7</td>
                  <td>6783</td>
                  <td>12345</td>
                  <td>456</td>
                  <td>763</td>
                </tr>
                <tr>
                  <td>Sven Alsvik</th>
                  <td>9.8</td>
                  <td>8.6</td>
                  <td>5463</td>
                  <td>10020</td>
                  <td>400</td>
                  <td>654</td>
                </tr>
                <tr>
                  <td>Natalia Olsen</td>
                  <td>5.6</td>
                  <td>3.4</td>
                  <td>200</td>
                  <td>554</td>
                  <td>23</td>
                  <td>107</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#leaderboard-charts" href="#international">
            International
          </a>
        </div>
        <div id="international" class="accordion-body collapse">
          <div class="accordion-inner">
            <table class="table tablesorter table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Best Sesh</th>
                  <th>Average Sesh</th>
                  <th>Waves</th>
                  <th>Tricks</th>
                  <th>Set Waves</th>
                  <th>Water Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Bethany Warburton</th>
                  <td>9.9</td>
                  <td>8.7</td>
                  <td>6783</td>
                  <td>12345</td>
                  <td>456</td>
                  <td>763</td>
                </tr>
                <tr>
                  <td>Sven Alsvik</th>
                  <td>9.8</td>
                  <td>8.6</td>
                  <td>5463</td>
                  <td>10020</td>
                  <td>400</td>
                  <td>654</td>
                </tr>
                <tr>
                  <td>Natalia Olsen</td>
                  <td>5.6</td>
                  <td>3.4</td>
                  <td>200</td>
                  <td>554</td>
                  <td>23</td>
                  <td>107</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </body>
  <?php include('./includes/footer.inc.php'); ?>
  <script type="text/javascript" id="js">
    $(document).ready(function() { 
      // call the tablesorter plugin 
      $("table").tablesorter({ 
        // sort on the first column, order desc. 
        sortList: [[1,1]] 
      }); 
    }); 
  </script>
</html>
