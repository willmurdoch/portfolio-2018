<?php
//confirm that this is the full list of players page
$statsFullPlPage=true;

//Query all top goalies
$url5 = 'https://api.pointstreak.com/lacrosse/season/goalieleaders/15914/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context5 = stream_context_create($opts);
$content5 = file_get_contents($url5, false, $context5);

$gl_json=json_decode($content5, true);
$getTheGoalies=$gl_json['goalieleaders']['goalie'];

$gl_index=0;
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <title>Full Player Stats | NLL</title>
      <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include 'includes/nav.php'; ?>

        <div class="content">
          <div class="stats feed">

            <div class="schedule">
              <?php include 'components/schedule-slider.php'; ?>
            </div>
            <div class="scaler">
              <div class="content-wrap">
                <div class="nll-bar sidebar-left w70">
                  <div class="header-text-container">
                    <div class="header-text">
                      <h1>Full Player Stats</h1>
                    </div>
                  </div>
                  <!--Players-->
                  <div class="stats-all">
                    <h4>TOP PLAYERS: GOALIES</h4> | <a href="stat-detail.php">See All Stats <span>›</span></a>
                  </div>
                  <div class="stat-listing">
                    <?php
                      for($i=0;$i<sizeof($getTheGoalies);$i+=3){
                        include 'components/stat-block-goalies.php';
                      }
                    ?>
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
