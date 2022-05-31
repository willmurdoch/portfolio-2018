<?php
//confirm that this is not the full list of players page
$statsFullPlPage=false;

$url = 'https://api.pointstreak.com/lacrosse/season/scoringleaders/15914/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context = stream_context_create($opts);
$content = file_get_contents($url, false, $context);

$pl_json=json_decode($content, true);

$pl_index=0;
$gl_index=0;
$t_index=0;

 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <title>Stats | NLL</title>
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
                      <h1>Stats</h1>
                    </div>
                  </div>
                  <!--Players-->
                  <div class="stats-all">
                    <h4>PLAYERS</h4> | <a href="stat-detail.php">See All Stats <span>›</span></a>
                  </div>
                  <div class="stat-listing">
                    <?php include 'components/stat-block-player.php'; ?>
                    <?php include 'components/stat-block-player.php'; ?>
                    <?php include 'components/stat-block-player.php'; ?>
                    <?php include 'components/stat-block-player.php'; ?>
                  </div>
                  <!--Goalies-->
                  <div class="stats-all">
                    <h4>GOALIES</h4> | <a href="stat-detail.php">See All Stats <span>›</span></a>
                  </div>
                  <div class="stat-listing">
                    <?php include 'components/stat-block-goalies.php'; ?>
                    <?php include 'components/stat-block-goalies.php'; ?>
                    <?php include 'components/stat-block-goalies.php'; ?>
                    <?php include 'components/stat-block-goalies.php'; ?>
                  </div>
                  <!--Teams-->
                  <div class="stats-all">
                    <h4>TEAMS</h4> | <a href="#">See All Stats <span>›</span></a>
                  </div>
                  <div class="stat-listing">
                    <?php include 'components/stat-block-team.php'; ?>
                    <?php include 'components/stat-block-team.php'; ?>
                    <?php include 'components/stat-block-team.php'; ?>
                    <?php// include 'components/stat-block-team.php'; ?>
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
