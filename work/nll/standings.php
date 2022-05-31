<?php

$content = file_get_contents('./js/onloadpage/standings.json');
$thisweek_json=json_decode($content,true);
$es_json=$thisweek_json[0];//east division
$ws_json=$thisweek_json[1];//west division


?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <title>Full Standings | NLL</title>
      <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include 'includes/nav.php'; ?>

        <div class="content">
          <div class="schedule feed">

            <div class="schedule">
              <?php include 'components/schedule-slider.php'; ?>
            </div>
            <div class="header-text-container">
              <div class="header-text">
                <h1>Full Standings</h1>
              </div>

            </div>
            <div class="scaler">
              <div class="content-wrap">
                <div class="nll-bar stats sidebar-left w70">
                  <div class="stats-wrap">
                    <div class="stats-text">
                      <h3>EASTERN DIVISION</h3>
                      <p>Est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                    </div>
                    <div class="season-stat-table">
                      <div class="table-label">
                        <h3>Regular Season</h3>
                      </div>
                      <div class="table-overflow">
                        <table>
                          <tr>
                            <th>Year</th>
                            <th>Team</th>
                            <th>W</th>
                            <th>L</th>
                            <th>GB</th>
                            <th>WPCT</th>
                            <th>GF</th>
                            <th>GA</th>
                            <th>HOME</th>
                            <th>AWAY</th>
                          </tr>

                          <?php
                            foreach($es_json as $es){
                          ?>
                            <tr>
                              <td>2017</td>
                              <td>
                                <?php
                                  if(substr($es['teamname'], 0, 1)=='x' || substr($es['teamname'], 0, 1)=='y' || substr($es['teamname'], 0, 1)=='z'){
                                    echo substr($es['teamname'], 1, strlen($es['teamname']));
                                  }else{
                                    echo $es['teamname'];
                                  }
                                ?>
                              </td>
                              <td><?php echo $es['wins']; ?></td>
                              <td><?php echo $es['losses']; ?></td>
                              <td><?php echo $es['gb']; ?></td>
                              <td><?php echo $es['winningpercentage']; ?></td>
                              <td><?php echo $es['goalsfor']; ?></td>
                              <td><?php echo $es['goalsagainst']; ?></td>
                              <td><?php echo $es['homerecord']; ?></td>
                              <td><?php echo $es['roadrecord']; ?></td>

                            </tr>
                          <?php } ?>

                        </table>
                      </div>
                    </div>


                    <div class="stats-text">
                      <h3>WESTERN DIVISION</h3>
                      <p>Est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                    </div>
                    <div class="season-stat-table">
                      <div class="table-label">
                        <h3>Regular Season</h3>
                      </div>
                      <div class="table-overflow">
                        <table>
                          <tr>
                            <th>Year</th>
                            <th>Team</th>
                            <th>W</th>
                            <th>L</th>
                            <th>GB</th>
                            <th>WPCT</th>
                            <th>GF</th>
                            <th>GA</th>
                            <th>HOME</th>
                            <th>AWAY</th>
                          </tr>

                          <?php
                            foreach($ws_json as $ws){
                          ?>
                              <tr>
                                <td>2017</td>
                                <td>
                                  <?php
                                    if(substr($ws['teamname'], 0, 1)=='x' || substr($ws['teamname'], 0, 1)=='y' || substr($ws['teamname'], 0, 1)=='z'){
                                      echo substr($ws['teamname'], 1, strlen($ws['teamname']));
                                    }else{
                                      echo $ws['teamname'];
                                    }
                                  ?>
                                </td>
                                <td><?php echo $ws['wins']; ?></td>
                                <td><?php echo $ws['losses']; ?></td>
                                <td><?php echo $ws['gb']; ?></td>
                                <td><?php echo $ws['winningpercentage']; ?></td>
                                <td><?php echo $ws['goalsfor']; ?></td>
                                <td><?php echo $ws['goalsagainst']; ?></td>
                                <td><?php echo $ws['homerecord']; ?></td>
                                <td><?php echo $ws['roadrecord']; ?></td>

                              </tr>
                          <?php } ?>

                        </table>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="nll-bar sidebar-right w30">
                  <?php include 'components/master-sidebar.php'; ?>
                </div>
              </div>
            </div>
          </div>
          <?php include 'includes/footer.php'; ?>
        </div>
        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
