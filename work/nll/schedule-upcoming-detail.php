<?php
$gettingGameId=$_GET['g_id'];
//Current game Query
$url = 'https://api.pointstreak.com/lacrosse/game/boxscore/'.$gettingGameId.'/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context = stream_context_create($opts);
$content = file_get_contents($url, false, $context);

$gbox_json=json_decode($content, true);
$getDet_season=$gbox_json['boxscore']['season']['seasonid'];
$getDet_json=$gbox_json['boxscore']['gameinformation'];
$getDet_team1=$getDet_json['awayteam']['teamid'];
$getDet_team2=$getDet_json['hometeam']['teamid'];
$getSaveSummary=$gbox_json['boxscore']['teamroster'];


//Fetching away team info
$url2 = 'https://api.pointstreak.com/lacrosse/team/roster/'.$getDet_team1.'/'.$getDet_season.'/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context2 = stream_context_create($opts);
$content2 = file_get_contents($url2, false, $context2);
$team1_json=json_decode($content2, true);
$getTeam1Logo=$team1_json['teamroster']['team']['teamlogo'];
$getTeam1Minilogo=$team1_json['teamroster']['team']['teamlogosmall'];
$getTeam1Staff=$team1_json['teamroster']['team']['staff'];
$getTeam1Players=$team1_json['teamroster']['team']['players']['player'];
//get the team 1 captain(s)
$getTeam1Captain=array();
foreach($getTeam1Players as $gPlayer){
  if($gPlayer['captain']!="0"){
    $getTeam1Captain[]=$gPlayer;
  }
}
//Fetching home team info
$url3 = 'https://api.pointstreak.com/lacrosse/team/roster/'.$getDet_team2.'/'.$getDet_season.'/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context3 = stream_context_create($opts);
$content3 = file_get_contents($url3, false, $context3);
$team2_json=json_decode($content3, true);
$getTeam2Logo=$team2_json['teamroster']['team']['teamlogo'];
$getTeam2Minilogo=$team2_json['teamroster']['team']['teamlogosmall'];
$getTeam2Staff=$team2_json['teamroster']['team']['staff'];
$getTeam2Players=$team2_json['teamroster']['team']['players']['player'];
//get the team 2 captain(s)
$getTeam2Captain=array();
foreach($getTeam2Players as $gPlayer){
  if($gPlayer['captain']!="0"){
    $getTeam2Captain[]=$gPlayer;
  }
}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <title><?php echo $getDet_json['awayteam']['mascot']." vs ".$getDet_json['hometeam']['mascot']; ?>: UPCOMING | NLL</title>
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
                <span>Schedule</span>
              </div>
            </div>
            <div class="scaler">
              <div class="content-wrap">
                <div class="nll-bar sidebar-left w70">
                  <div class="matchup">
                    <div class="matchup-time-loc">
                      <h3>
                        <?php
                          date_default_timezone_set('America/New_York');
                          $getDetDt=DateTime::createFromFormat('Y-m-d H:i:s',$getDet_json['gamedate']." ".$getDet_json['gametime']);
                          $getDetDt2=$getDetDt->format('F d, Y -- g:i A');

                          echo $getDetDt2." EST";
                        ?>
                      </h3>
                      <p>at <?php echo $getDet_json['arena']['arenaname']; ?></p>
                    </div>

                    <!--Team logos/details-->
                    <div class="matchup-split">

                      <!--Left Side Team-->
                      <div class="team-wrap">
                        <div class="logo">
                          <img src="<?php echo $getTeam1Logo; ?>">
                        </div>
                        <div class="dets">
                          <span class="loc"><?php echo $getDet_json['awayteam']['teamname']; ?></span>
                          <span class="name"><?php echo $getDet_json['awayteam']['mascot']; ?></span>
                          <div class="standings">
                            <p>7-3</p>
                            <span>|</span>
                            <a href="/schedule">Full Schedule &gt;</a>
                          </div>
                        </div>
                        <div class="leaders">
                          <p>Manager: <span>Firstname Lastname</span></p>
                          <p>Coach: <span>
                            <?php
                              if(isset($getTeam1Staff['staffmember'][0])){
                                $staffMem=$getTeam1Staff['staffmember'];
                                for($i=0;$i<sizeof($staffMem);$i++){
                                  echo $staffMem[$i]['firstname']." ".$staffMem[$i]['lastname']."<br>";
                                }
                              }else{
                                echo $getTeam1Staff['staffmember']['firstname']." ".$getTeam1Staff['staffmember']['lastname'];
                              }
                            ?>
                          </span></p>
                          <p>Captain:
                            <?php
                              foreach($getTeam1Captain as $thisCaptain){
                                echo "<a href='/player'>".$thisCaptain['firstname']." ".$thisCaptain['lastname']."</a>";
                                if(sizeof($getTeam1Captain)>1){
                                  echo "<br>";
                                }
                              }
                            ?>
                          </p>
                        </div>
                      </div>

                      <span class="at">at</span>

                      <!--Right Side Team-->
                      <div class="team-wrap">
                        <div class="logo">
                          <img src="<?php echo $getTeam2Logo; ?>">
                        </div>
                        <div class="dets">
                          <span class="loc"><?php echo $getDet_json['hometeam']['teamname']; ?></span>
                          <span class="name"><?php echo $getDet_json['hometeam']['mascot']; ?></span>
                          <div class="standings">
                            <p>7-3</p>
                            <span>|</span>
                            <a href="/schedule">Full Schedule &gt;</a>
                          </div>
                        </div>
                        <div class="leaders">
                          <p>Manager: <span>Firstname Lastname</span></p>
                          <p>Coach: <span>
                            <?php
                              foreach($getTeam2Staff as $thisStaffMember){
                                echo $thisStaffMember['firstname']." ".$thisStaffMember['lastname'];
                                if(sizeof($getTeam2Staff)>1){
                                  echo "<br>";
                                }
                              }
                            ?>
                          </span></p>
                          <p>Captain:
                            <?php
                              foreach($getTeam2Captain as $thisCaptain){
                                echo "<a href='/player'>".$thisCaptain['firstname']." ".$thisCaptain['lastname']."</a>";
                                if(sizeof($getTeam2Captain)>1){
                                  echo "<br>";
                                }
                              }
                            ?>
                          </p>
                        </div>
                      </div>
                    </div>
                    <!--End Teams-->

                    <!--Match Day Countdown - just need to pass in game date-->
                    <div class="cd-clock">
                      <div class="countdown">
                        <div class="timer">
                          <div class="timer-header">
                            <div class="sponsor"><img src="assets/logos/heineken.png"></div>
                            <h3>Match Day Countdown</h3>
                          </div>
                          <?php
                            date_default_timezone_set('America/New_York');
                            $getDetDt=DateTime::createFromFormat('Y-m-d H:i:s',$getDet_json['gamedate']." ".$getDet_json['gametime']);
                            $getDetDt3=$getDetDt->format('Y-m-d H:i:s');
                          ?>
                          <div class="clock" data-targetdate="<?php echo $getDetDt3; ?>">

                          </div>
                        </div>
                        <div class="countdown-ctas">
                          <a href="#" class="btn gold reminder">Set Reminder</a>
                          <a href="#" class="btn gray">Buy Tickets</a>
                        </div>
                        <div class="countdown-listing-links">
                          <p>US TV Listing: Comcast Sportsnet <span>|</span> Canada TV Listing: TSN Go <span>|</span> Online: <a href="#">NLL Live Stream</a></p>
                        </div>
                      </div>
                      <!--End Countdown-->
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
        <script src="js/countdown.js"></script>
    </body>
</html>
