<?php
include 'components/sorting.php';
if(isset($_GET['lac_order'])){
  $myArrayOrder=$_GET['lac_order'];
}else{
  $myArrayOrder="";
}

//getting the player position from filter
if(!isset($_GET['lac_position'])){
  $getTeamPosition="POSITION";
}else{
  $getTeamPosition=$_GET['lac_position'];
}

//getting the Team from the form
if(!isset($_GET['lac_team'])){
  $myTeamId=25955;
}else{
  $myTeamId=$_GET['lac_team'];
}

//getting the active status from filter
if(!isset($_GET['lac_active'])){
  $isActive="true";
  $urlActive="Active";
}else{
  $isActive=$_GET['lac_active'];

  if($isActive=="Active"){
    $isActive="true";
    $urlActive="Active";
  }else{
    $isActive="false";
    $urlActive="Inactive";
  }
}

//League teams
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
//Json equivalent
$league_content = file_get_contents('./js/onloadpage/seasonList.json');
$league_json=json_decode($league_content,true);

//Team roster
$url = 'https://api.pointstreak.com/lacrosse/team/roster/'.$myTeamId.'/15914/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context = stream_context_create($opts);
$content = file_get_contents($url, false, $context);

$pl_json=json_decode($content, true);
$thisTeam=$pl_json['teamroster']['team'];
$nllPlayers=$pl_json['teamroster']['team']['players']['player'];

$nllPlayers2=array();//filtered new NLL Players array

//filter array results to contain only items fulfilling requested attributes
//If default Position has been selected
if($getTeamPosition=="POSITION"){
  foreach($nllPlayers as $nllPlayer){
    if($nllPlayer['active']==$isActive){
      //use the players' birthdates to determine their ages
      $myCurrentDate=strtotime(date("d.m.Y"));
      $myBirthdate=strtotime($nllPlayer['birthdate']);
      $days=($myCurrentDate-$myBirthdate)/86400;
      $playerAge=floor($days/365);
      $nllPlayer['birthdate']=$playerAge;
      //convert heights to php-comparable numbers
      $heightWhole=substr($nllPlayer['height'],0,1);
      $heightNumer=substr($nllPlayer['height'],2);
      $newHeight=($heightWhole*12)+$heightNumer;
      $nllPlayer['newHeight']=$newHeight;
      //insert into new array
      $nllPlayers2[]=$nllPlayer;
    }
  }
}else{
  foreach($nllPlayers as $nllPlayer){
    if($nllPlayer['position']==$getTeamPosition && $nllPlayer['active']==$isActive){
      //use the players' birthdates to determine their ages
      $myCurrentDate=strtotime(date("d.m.Y"));
      $myBirthdate=strtotime($nllPlayer['birthdate']);
      $days=($myCurrentDate-$myBirthdate)/86400;
      $playerAge=floor($days/365);
      $nllPlayer['birthdate']=$playerAge;
      //convert heights to php-comparable numbers
      $heightWhole=substr($nllPlayer['height'],0,1);
      $heightNumer=substr($nllPlayer['height'],2);
      $newHeight=($heightWhole*12)+$heightNumer;
      $nllPlayer['newHeight']=$newHeight;
      //insert into new array
      $nllPlayers2[]=$nllPlayer;
    }
  }
}
unset($nllPlayers);//get rid of first NLL Player array

//sort the Players array
if($myArrayOrder=="name"){
  usort($nllPlayers2,"sortByNameOrder");
}elseif($myArrayOrder=="number"){
  usort($nllPlayers2,"sortByNumberOrder");
}elseif($myArrayOrder=="age"){
  usort($nllPlayers2,"sortByAgeOrder");
}elseif($myArrayOrder=="height"){
  usort($nllPlayers2,"sortByHeightOrder");
}elseif($myArrayOrder=="weight"){
  usort($nllPlayers2,"sortByWeightOrder");
}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <title>Players | NLL</title>
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
                  <div class="header-text-container">
                    <div class="header-text">
                      <h1>Players</h1>
                    </div>
                  </div>
                  <?php include 'components/players-filters.php'; ?>
                  <!--Players-->
                  <div class="player-listing">
                    <?php
                    if(sizeof($nllPlayers2)<=8){
                      foreach($nllPlayers2 as $myPlayer){
                        include 'components/player-tile.php';
                      }
                    }else{
                      //truncate the array to only 8 players
                      for($i=0;$i<=7;$i++){
                        $myPlayer=$nllPlayers2[$i];

                        include 'components/player-tile.php';
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
