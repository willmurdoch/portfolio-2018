<?php
//getting the Team info from the filter form
if(!isset($_GET['sched_team'])){
  $myTeamId="TEAM";
}else{
  $myTeamId=$_GET['sched_team'];
}
//retrieving requested week
if(!isset($_GET['sched_dates'])){
  $getMyDate="DATES";
}else{
  $getMyDate=$_GET['sched_dates'];
}

//getting games from schedule
/*
$url = 'https://api.pointstreak.com/lacrosse/season/schedule/15914/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context = stream_context_create($opts);
$content = file_get_contents($url, false, $context);

$thisweek_json=json_decode($content, true);
$games_json=$thisweek_json['schedule']['game'];
$games_json2=array();
*/
$content = file_get_contents('./js/onloadpage/schedule15914.json');
$thisweek_json=json_decode($content,true);
$games_json=$thisweek_json;
$games_json2=array();
//filtering and sorting the array results according to the Team filter requests
foreach($games_json as $arrGame){
  if($myTeamId=="TEAM"){
    $games_json2[]=$arrGame;
  }else{

    if($arrGame['home']['id']==$myTeamId || $arrGame['away']['id']==$myTeamId){
      $games_json2[]=$arrGame;
    }

  }
}
unset($games_json);

//populating Dates filter with a Season's weeks
$weekNumber=1;
$weeksArray=array();
$weeksArray['week '.$weekNumber]=DateTime::createFromFormat('Y-m-d', $games_json2[0]['longdate']);
$weeksArray['week '.$weekNumber]=$weeksArray['week '.$weekNumber]->format('m-d-Y');

$lastGameDate=strtotime(date($games_json2[0]['longdate']));

foreach($games_json2 as $aGame){
  $thisGameDate=strtotime(date($aGame['longdate']));
  $dateDifference=($thisGameDate-$lastGameDate)/86400;//converts time to days
  //if the games have more than 5 days in between them, it's a new week
  if($dateDifference>=5){
    $weekNumber++;
    $weeksArray['week '.$weekNumber]=DateTime::createFromFormat('Y-m-d',$aGame['longdate']);
    $weeksArray['week '.$weekNumber]=$weeksArray['week '.$weekNumber]->format('m-d-Y');
  }

  $lastGameDate=$thisGameDate;
}

//filtering the games array by date
$games_json3=array();

foreach($games_json2 as $uGame){
  if($getMyDate=="DATES"){
    $games_json3[]=$uGame;
  }else{
    $getMyDateDt=DateTime::createFromFormat('m-d-Y',$getMyDate);
    $getGameDate=DateTime::createFromFormat('Y-m-d',$uGame['longdate']);

    $dateDiff=date_diff($getGameDate,$getMyDateDt);
    $dateDiff=$dateDiff->format('%a');

    if($dateDiff<5){
      $games_json3[]=$uGame;
    }
  }
}
unset($games_json2);

//League teams
//getting teams to populate the filter
/*
$league_url = 'https://api.pointstreak.com/lacrosse/league/structure/230/json';
$league_opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$league_context = stream_context_create($league_opts);
$league_content = file_get_contents($league_url, false, $league_context);

$league_json=json_decode($league_content, true);
*/
$league_content = file_get_contents('./js/onloadpage/seasonList.json');
$league_json=json_decode($league_content,true);
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <title>Schedule | NLL</title>
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
                <h1>Schedule</h1>
                <div class="filterSearch">
                  <input type="text" placeholder="Search NLL News...">
                  <input type="submit" value="">
                </div>
              </div>

            </div>
            <div class="scaler">
              <div class="content-wrap">
                <div class="nll-bar sidebar-left w70">
                  <?php include 'components/schedule-filters.php'; ?>
                  <div class="schedule-listing">
                    <?php
                    if(sizeof($games_json3)<6){
                      foreach($games_json3 as $gj){
                        $gameDate=strtotime($gj['longdate']);
                        $gameTime=strtotime($gj['time']);
                        date_default_timezone_set("America/New_York");
                        $currentDate=strtotime(date('Y-m-d'));
                        $currentTime=time();

                        $curGameStatus=$gj['status'];

                        if($currentDate>$gameDate){
                          //echo "Past Game<br>";
                          include 'components/schedule-tile-past.php';
                        }elseif($currentDate<$gameDate){
                          //echo "Upcoming Game<br>";
                          include 'components/schedule-tile-upcoming.php';
                        }elseif($currentDate==$gameDate){

                          if($currentTime<$gameTime){
                            //echo "Upcoming Today game<br>";
                            include 'components/schedule-tile-upcoming.php';
                          }else{
                            if($curGameStatus=="FINAL"){
                              //echo "Past Game<br>";
                              include 'components/schedule-tile-past.php';
                            }else{
                              //echo "Game In Progress<br>";
                              include 'components/schedule-tile-live.php';
                            }
                          }
                        }
                      }
                    }else{
                      for($i=0;$i<=6;$i++){
                        $gj=$games_json3[$i];
                        $gameDate=strtotime($gj['longdate']);
                        $gameTime=strtotime($gj['time']);
                        date_default_timezone_set("America/New_York");
                        $currentDate=strtotime(date('Y-m-d'));
                        $currentTime=time();

                        $curGameStatus=$gj['status'];

                        if($currentDate>$gameDate){
                          //echo "Past Game<br>";
                          include 'components/schedule-tile-past.php';
                        }elseif($currentDate<$gameDate){
                          //echo "Upcoming Game<br>";
                          include 'components/schedule-tile-upcoming.php';
                        }elseif($currentDate==$gameDate){

                          if($currentTime<$gameTime){
                            //echo "Upcoming Today game<br>";
                            include 'components/schedule-tile-upcoming.php';
                          }else{
                            if($curGameStatus=="FINAL"){
                              //echo "Past Game<br>";
                              include 'components/schedule-tile-past.php';
                            }else{
                              //echo "Game In Progress<br>";
                              include 'components/schedule-tile-live.php';
                            }
                          }
                        }
                      }
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
