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
$getScoringSummary=$gbox_json['boxscore']['scoringsummary']['goal'];
$getSaveSummary=$gbox_json['boxscore']['teamroster'];

//goalscorers array
$awayScorers=array();
$awaySMulti=array();
$homeScorers=array();
$homeSMulti=array();
//assists array
$awayAssists=array();
$homeAssists=array();
//saves array
$awaySaves=array();
$homeSaves=array();
//scorers
foreach($getScoringSummary as $mGoal){
  if($mGoal['scoringteam']['side']=='away'){
    if(!in_array($mGoal['scorer'],$awayScorers)){
      $mFullname=$mGoal['scorer']['firstname']." ".$mGoal['scorer']['lastname'];
      $mScorerId=$mGoal['scorer']['playerid'];

      $awayScorers[]=$mGoal['scorer'];
      $awaySMulti[$mScorerId]=array(
        'l_playerid' => $mScorerId,
        'l_fullname' => $mFullname,
        'timesAppeared' => 1
      );
    }else{
      $mScorerId=$mGoal['scorer']['playerid'];

      $awaySMulti[$mScorerId]['timesAppeared']++;
    }
  }else{
    if(!in_array($mGoal['scorer'],$homeScorers)){
      $mFullname=$mGoal['scorer']['firstname']." ".$mGoal['scorer']['lastname'];
      $mScorerId=$mGoal['scorer']['playerid'];

      $homeScorers[]=$mGoal['scorer'];
      $homeSMulti[$mScorerId]=array(
        'l_playerid' => $mScorerId,
        'l_fullname' => $mFullname,
        'timesAppeared' => 1
      );
    }else{
      $mScorerId=$mGoal['scorer']['playerid'];

      $homeSMulti[$mScorerId]['timesAppeared']++;
    }
  }
}
//Scorers arrays
usort($awaySMulti, function($a, $b){
  return $b['timesAppeared']-$a['timesAppeared'];
});
usort($homeSMulti, function($a, $b){
  return $b['timesAppeared']-$a['timesAppeared'];
});
//Goal saves arrays
foreach($getSaveSummary as $mSave){
  if($mSave['side']=='away'){
    foreach($mSave['goalie'] as $mGoalie){
      if(array_key_exists('saves',$mGoalie)){
        $awaySaves[]=$mGoalie;
      }
    }
  }else{
    foreach($mSave['goalie'] as $mGoalie){
      if(array_key_exists('saves',$mGoalie)){
        $homeSaves[]=$mGoalie;
      }
    }
  }
}
//sort the goalies
if(sizeof($awaySaves)>1){
  usort($awaySaves, function($a,$b){
    return $b['saves']-$a['saves'];
  });
}
if(sizeof($homeSaves)>1){
  usort($homeSaves, function($a,$b){
    return $b['saves']-$a['saves'];
  });
}
//Assists arrays
foreach($getScoringSummary as $goal){
  for($i = 1; $i < 50; $i++){
    //is the assist from an away team?
    if($goal['scoringteam']['side']=="away"){
      if(isset($goal['assist'.$i])){
        $onePlayerId=$goal['assist'.$i]['playerid'];

        if(!isset($awayAssists[$onePlayerId], $awayAssists)){
          $awayAssists[$onePlayerId]=array(
            'l_playerid'=>$onePlayerId,
            'l_fullname'=>$goal['assist'.$i]['firstname']." ".$goal['assist'.$i]['lastname'],
            'timesAppeared'=>1,
            'teamside'=>$goal['scoringteam']['side'],
          );
        }else{
          $awayAssists[$onePlayerId]['timesAppeared']++;
        }
      }else{;}
      //is the assist from a home team?
    }elseif($goal['scoringteam']['side']=="home"){
      if(isset($goal['assist'.$i])){
        $onePlayerId=$goal['assist'.$i]['playerid'];

        if(!isset($homeAssists[$onePlayerId], $homeAssists)){
          $homeAssists[$onePlayerId]=array(
            'l_playerid'=>$onePlayerId,
            'l_fullname'=>$goal['assist'.$i]['firstname']." ".$goal['assist'.$i]['lastname'],
            'timesAppeared'=>1,
            'teamside'=>$goal['scoringteam']['side'],
          );
        }else{
          $homeAssists[$onePlayerId]['timesAppeared']++;
        }
      }else{;}
    }
  }
}
//Sort assist arrays
usort($awayAssists, function($a,$b){
  return $b['timesAppeared']-$a['timesAppeared'];
});
usort($homeAssists, function($a,$b){
  return $b['timesAppeared']-$a['timesAppeared'];
});
//all points array
//place goals entries in points array
$awayPoints=$awaySMulti;
$homePoints=$homeSMulti;
//check each assist entry to see if it appears in the points array and adds to timesAppeared if it does
for($i=0;$i<sizeof($awayPoints);$i++){
  for($j=0;$j<sizeof($awayAssists);$j++){
    if($awayAssists[$j]['l_playerid']==$awayPoints[$i]['l_playerid']){
      $aSum=$awayPoints[$i]['timesAppeared']+$awayAssists[$j]['timesAppeared'];
      $awayPoints[$i]['timesAppeared']=$aSum;
    }
  }
}
//if assist entry doesnt exist in points array, then add to points array
for($i=0;$i<sizeof($homeAssists);$i++){
  $thisPlaId=$homeAssists[$i]['l_playerid'];
  $inThere='false';

  for($j=0;$j<sizeof($homePoints);$j++){

    if($homeAssists[$i]['l_playerid']==$homePoints[$j]['l_playerid']){
      $inThere='true';
    }
  }

  if($inThere=='false'){
    $homePoints[]=array(
      'l_playerid'=>$thisPlaId,
      'l_fullname'=>$homeAssists[$i]['l_fullname'],
      'timesAppeared'=>$homeAssists[$i]['timesAppeared'],
    );
  }
}
//check each assist entry to see if it appears in the points array and adds to timesAppeared if it does
for($i=0;$i<sizeof($homePoints);$i++){
  for($j=0;$j<sizeof($homeAssists);$j++){
    if($homeAssists[$j]['l_playerid']==$homePoints[$i]['l_playerid']){
      $aSum=$homePoints[$i]['timesAppeared']+$homeAssists[$j]['timesAppeared'];
      $homePoints[$i]['timesAppeared']=$aSum;
    }
  }
}
//if assist entry doesnt exist in points array, then add to points array
for($i=0;$i<sizeof($homeAssists);$i++){
  $thisPlaId=$homeAssists[$i]['l_playerid'];
  $inThere='false';

  for($j=0;$j<sizeof($homePoints);$j++){

    if($homeAssists[$i]['l_playerid']==$homePoints[$j]['l_playerid']){
      $inThere='true';
    }
  }

  if($inThere=='false'){
    $homePoints[]=array(
      'l_playerid'=>$thisPlaId,
      'l_fullname'=>$homeAssists[$i]['l_fullname'],
      'timesAppeared'=>$homeAssists[$i]['timesAppeared'],
    );
  }
}
usort($awayPoints, function($a,$b){
  return $b['timesAppeared']-$a['timesAppeared'];
});
usort($homePoints, function($a,$b){
  return $b['timesAppeared']-$a['timesAppeared'];
});
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
      <title><?php echo $getDet_json['awayteam']['mascot']." vs ".$getDet_json['hometeam']['mascot']; ?>: RECORD | NLL</title>
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
                          $getDetDt=DateTime::createFromFormat('Y-m-d H:i:s',$getDet_json['gamedate']." ".$getDet_json['gametime']);
                          $getDetDt2=$getDetDt->format('F d, Y -- g:i A');

                          echo $getDetDt2." EST";
                        ?>
                      </h3>
                      <p>at <?php echo $getDet_json['arena']['arenaname']; ?></p>
                    </div>

                    <!--Current Game Score (if applicable)-->
                    <div class="game-score">
                      <span class="score-label">Final Score:</span>
                      <div class="score-numbers">
                        <span class="home winner"><?php echo $gbox_json['boxscore']['teamstats'][0]['goals']; ?></span>
                        <span class="divider">-</span>
                        <span class="away"><?php echo $gbox_json['boxscore']['teamstats'][1]['goals']; ?></span>
                      </div>
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

                    <div class="match-recap-block">
                      <div class="rule-header">
                        <h4>Match Recap</h4>
                      </div>
                      <iframe width="660" height="370" src="https://www.youtube.com/embed/KgXERNEX27c?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                      <a href="#" class="btn red">See Full Match Recap</a>
                    </div>

                    <!--Start stats-->
                    <div class="stat-block">
                      <div class="rule-header">
                        <h4>Head-to-head</h4>
                      </div>
                      <table class="stat-table head-to-head">
                        <tbody><tr>
                          <th><img src="<?php echo $getTeam1Minilogo; ?>"></th>
                          <th></th>
                          <th><img src="<?php echo $getTeam2Minilogo; ?>"></th>
                        </tr>
                        <?php
                          //away team shots stats
                          $awaySog=$gbox_json['boxscore']['teamstats'][0]['shotsongoal'];
                          //home team shots stats
                          $homeSog=$gbox_json['boxscore']['teamstats'][1]['shotsongoal'];
                        ?>
                        <tr>
                          <td>1247</td>
                          <td>Shots</td>
                          <td class="winner">1348</td>
                        </tr>
                        <tr>
                          <td>16.3%</td>
                          <td>Shot Percentage</td>
                          <td class="winner">17.0%</td>
                        </tr>
                        <tr>
                          <td class="<?php if($awaySog>$homeSog){echo 'winner';} ?>"><?php echo $awaySog; ?></td>
                          <td>Shots on Goal</td>
                          <td class="<?php if($homeSog>$awaySog){echo 'winner';} ?>"><?php echo $homeSog; ?></td>
                        </tr>
                        <tr>
                          <td class="winner">70.7%</td>
                          <td>Shots on Goal Percentage</td>
                          <td>68.6%</td>
                        </tr>
                        <?php
                          //away team percentage
                          $awayFoffWon=$gbox_json['boxscore']['teamstats'][0]['faceoffswon'];
                          $awayFoff=$gbox_json['boxscore']['teamstats'][0]['faceoffs'];
                          $foPct=($awayFoffWon/$awayFoff)*100;
                          $foPct=number_format($foPct,1);
                          //home team percentage
                          $homeFoffWon=$gbox_json['boxscore']['teamstats'][1]['faceoffswon'];
                          $homeFoff=$gbox_json['boxscore']['teamstats'][1]['faceoffs'];
                          $foPct2=($homeFoffWon/$homeFoff)*100;
                          $foPct2=number_format($foPct2,1);
                        ?>
                        <tr>
                          <td class="<?php if($foPct>$foPct2){echo 'winner';} ?>"><?php echo $awayFoffWon; ?>-<?php echo $awayFoff; ?></td>
                          <td>Face Offs</td>
                          <td class="<?php if($foPct2>$foPct){echo 'winner';} ?>"><?php echo $homeFoffWon; ?>-<?php echo $homeFoff; ?></td>
                        </tr>
                        <tr>
                          <td class="<?php if($foPct>$foPct2){echo 'winner';} ?>"><?php echo $foPct; ?>%</td>
                          <td>Face Off Percentage</td>
                          <td class="<?php if($foPct2>$foPct){echo 'winner';} ?>"><?php echo $foPct2; ?>%</td>
                        </tr>
                      </tbody></table>
                    </div>
                    <!--End stats-->

                  </div>
                </div>
                <div class="nll-bar sidebar-right w30">
                  <?php include 'components/master-sidebar.php'; ?>
                </div>
              </div>
            </div>
            <div class="rule-header tp">
              <h4>Top Players Matchup</h4>
            </div>
          </div>
          <div class="top-players">
            <div class="scaler">
              <div class="top-players-section">
                <span class="cat">Points</span>
                <div class="top-players-container">
                  <?php include 'components/top-players-points.php'; ?>
                </div>
              </div>
              <div class="top-players-section">
                <span class="cat">Goals</span>
                <div class="top-players-container">
                  <?php include 'components/top-players-goals.php'; ?>
                </div>
              </div>
              <div class="top-players-section">
                <span class="cat">Assists</span>
                <div class="top-players-container">
                  <?php include 'components/top-players-assists.php'; ?>
                </div>
              </div>
              <div class="top-players-section">
                <span class="cat">Saves</span>
                <div class="top-players-container">
                  <?php include 'components/top-players-saves.php'; ?>
                </div>
              </div>
            </div>
          </div>
          <?php include 'includes/footer.php'; ?>
        </div>
        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
