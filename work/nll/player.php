<?php
$playTeam=$_GET['tea_id'];

$url = 'https://api.pointstreak.com/lacrosse/team/roster/'.$playTeam.'/15914/json';//Reg Season
$url2 = 'https://api.pointstreak.com/lacrosse/team/roster/'.$playTeam.'/15914/json';//Post Season
//Regular Season
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context = stream_context_create($opts);
$content = file_get_contents($url, false, $context);

$currentTeamJson=json_decode($content, true);
//Regular Season array
$currentTeamIndex=$currentTeamJson['teamroster']['team'];
$protoPlayerArray=$currentTeamJson['teamroster']['team']['players']['player'];
$playerArray=array();
//get player id from url
$myPlayerId=$_GET['pl_id'];

for($j=0;$j<sizeof($protoPlayerArray);$j++){
  if($protoPlayerArray[$j]['playerid']==$myPlayerId){
    $playerArray[]=$protoPlayerArray[$j];
  }
}
//changing player position names
if($playerArray[0]['position']=="F"){
  $playerArray[0]['position']="Forward";
}elseif($playerArray[0]['position']=="T"){
  $playerArray[0]['position']="Transition";
}elseif($playerArray[0]['position']=="D"){
  $playerArray[0]['position']="Defender";
}elseif($playerArray[0]['position']=="G"){
  $playerArray[0]['position']="Goaltender";
}

//Post Season
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context = stream_context_create($opts);
$content = file_get_contents($url2, false, $context);

$currentTeamJson2=json_decode($content, true);

$currentTeamIndex2=$currentTeamJson2['teamroster']['team'];
$protoPlayerArray2=$currentTeamJson2['teamroster']['team']['players']['player'];
$playerArray2=array();

for($j=0;$j<sizeof($protoPlayerArray2);$j++){
  if($protoPlayerArray2[$j]['playerid']!=$myPlayerId){
    $playerArray2[]=$protoPlayerArray2[$j];
  }
}
//changing player position names
if($playerArray2[0]['position']=="F"){
  $playerArray2[0]['position']="Forward";
}elseif($playerArray2[0]['position']=="T"){
  $playerArray2[0]['position']="Transition";
}elseif($playerArray2[0]['position']=="D"){
  $playerArray2[0]['position']="Defender";
}elseif($playerArray2[0]['position']=="G"){
  $playerArray2[0]['position']="Goaltender";
}

//calculate the player's age based on birthday
$myCurrentDate=strtotime(date("d.m.Y"));
$myBirthdate=strtotime($playerArray[0]['birthdate']);
$days=($myCurrentDate-$myBirthdate)/86400;
$playerAge=floor($days/365);
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <title><?php echo $playerArray[0]['firstname']." ".$playerArray[0]['lastname']; ?> | NLL</title>
      <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include 'includes/nav.php'; ?>

        <div class="content">
          <div class="players feed">

            <div class="schedule">
              <?php include 'components/schedule-slider.php'; ?>
            </div>
            <div class="scaler">
              <div class="content-wrap">
                <div class="nll-bar sidebar-left w70">
                  <!--Player-->
                  <div class="player-wrap">
                    <div class="player-details">
                      <div class="player-headshot" style="background-image:url(<?php echo $playerArray[0]['photo']; ?>)"></div>
                      <div class="player-text">
                        <h1><?php echo $playerArray[0]['firstname']." ".$playerArray[0]['lastname']; ?></h1>
                        <h2>#<?php echo $playerArray[0]['jersey']." ".$playerArray[0]['position']; ?></h2>
                        <h2>Saskatchewan Rush</h2>
                        <div class="player-stats">
                          <p><strong>Age:</strong> <?php echo $playerAge; ?> </p>
                          <p><strong>Height:</strong> <?php echo $playerArray[0]['height']; ?> &nbsp;&nbsp;<strong>Weight:</strong> <?php echo $playerArray[0]['weight']; ?>lbs.</p>
                          <p><strong>Shoots:</strong> <?php echo $playerArray[0]['shoots']; ?></p>
                          <p><strong>Born:</strong> <?php echo date("F d, Y", strtotime($playerArray[0]['birthdate'])); ?></p>
                          <p><strong>Home Town:</strong> <?php echo $playerArray[0]['hometown']; ?></p>
                        </div>
                        <div class="player-social">
                          <a class="instagram" href="#"><span class="logo"></span> @chriswardle</a>
                          <a class="twitter" href="#"><span class="logo"></span> @chriswardle</a>
                        </div>
                      </div>
                    </div>
                    <div class="copy-block">
                      <h3>BIO</h3>
                      <p>Primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo.</p>
                      <p>In libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum.</p>
                    </div>
                    <div class="copy-block">
                      <h3>STATS</h3>
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
                            <th>GP</th>
                            <th>G</th>
                            <th>A</th>
                            <th>PTS</th>
                            <th>S</th>
                            <th>SPCT</th>
                            <th>SOG</th>
                            <th>SOGPCT</th>
                            <th>FO</th>
                          </tr>
                          <?php
                            for($k=0;$k<5;$k++){
                          ?>
                              <tr>
                                <td>2016</td>
                                <td><?php echo $currentTeamIndex['teamname']; ?></td>
                                <td><?php echo $playerArray[0]['gamesplayed']; ?></td>
                                <td><?php echo $playerArray[0]['goals']; ?></td>
                                <td><?php echo $playerArray[0]['assists']; ?></td>
                                <td><?php echo $playerArray[0]['points']; ?></td>
                                <td><?php echo $playerArray[0]['shotstotal']; ?></td>
                                <td><?php echo $playerArray[0]['shootingpercentage']; ?></td>
                                <td><?php echo $playerArray[0]['shotsongoal']; ?></td>
                                <td><?php echo $playerArray[0]['shootingpercentage']; ?></td>
                                <td><?php echo $playerArray[0]['faceoffswon']."-".$playerArray[0]['faceoffs']; ?></td>
                              </tr>
                          <?php
                            }
                          ?>

                        </table>
                      </div>
                    </div>
                    <div class="season-stat-table">
                      <div class="table-label">
                        <h3>Post Season</h3>
                      </div>
                      <div class="table-overflow">
                        <table>
                          <tr>
                            <th>Year</th>
                            <th>Team</th>
                            <th>GP</th>
                            <th>G</th>
                            <th>A</th>
                            <th>PTS</th>
                            <th>S</th>
                            <th>SPCT</th>
                            <th>SOG</th>
                            <th>SOGPCT</th>
                            <th>FO</th>
                          </tr>
                          <?php
                            for($k=0;$k<5;$k++){
                          ?>
                              <tr>
                                <td>2016</td>
                                <td><?php echo $currentTeamIndex2['teamname']; ?></td>
                                <td><?php echo $playerArray2[0]['gamesplayed']; ?></td>
                                <td><?php echo $playerArray2[0]['goals']; ?></td>
                                <td><?php echo $playerArray2[0]['assists']; ?></td>
                                <td><?php echo $playerArray2[0]['points']; ?></td>
                                <td><?php echo $playerArray2[0]['shotstotal']; ?></td>
                                <td><?php echo $playerArray2[0]['shootingpercentage']; ?></td>
                                <td><?php echo $playerArray2[0]['shotsongoal']; ?></td>
                                <td><?php echo $playerArray2[0]['shootingpercentage']; ?></td>
                                <td><?php echo $playerArray2[0]['faceoffswon']."-".$playerArray2[0]['faceoffs']; ?></td>
                              </tr>
                          <?php
                            }
                          ?>

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
