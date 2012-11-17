<?php include('./includes/header.inc.php'); ?>


  <body>

<?php

include('./includes/navbar.inc.php');

include('./includes/sidebar.inc.php');

?>


    <h1 align="center">Leaderboards</h1>

    <div class="accordion" id="leaderboard-charts">
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#leaderboard-charts" href="#friends">
            Friends
          </a>
        </div>
        <div id="friends" class="accordion-body collapse in">
          <div class="accordion-inner">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>High Score</th>
                  <th>Average Score</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Marco</td>
                  <td>9.8</td>
                  <td>7.3</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Peter</td>
                  <td>7.3</td>
                  <td>5.3</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Nishan</td>
                  <td>6.7</td>
                  <td>6.0</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Alec</td>
                  <td>6.5</td>
                  <td>6.1</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Cody</td>
                  <td>3.2</td>
                  <td>1.6</td>
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
            <p>FUCK</p>
            <!-- <table class="table table-striped">
              <thead>
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>High Score</th>
                  <th>Average Score</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Marco</td>
                  <td>9.8</td>
                  <td>7.3</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Peter</td>
                  <td>7.3</td>
                  <td>5.3</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Nishan</td>
                  <td>6.7</td>
                  <td>6.0</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Poop</td>
                  <td>6.5</td>
                  <td>6.1</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Cody</td>
                  <td>3.2</td>
                  <td>1.6</td>
                </tr>
              </tbody>
            </table> -->
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
            Table of rankings International
          </div>
        </div>
      </div>
      
    
  </body>
  
<?php include('./includes/footer.inc.php'); ?>

</html>
