<?php
//get photo for top goalie in team 1
foreach($getTeam1Players as $zPlayer){
  if($zPlayer['playerid']==$awaySaves[0]['playerid']){
    $team1TopGoaliePhoto=$zPlayer['photo'];
  }
}
//get photo for top goalie in team 2
foreach($getTeam2Players as $zPlayer){
  if($zPlayer['playerid']==$homeSaves[0]['playerid']){
    $team2TopGoaliePhoto=$zPlayer['photo'];
  }
}
?>
<div class="top-player w25">
  <!--Tile iamge-->
  <a href="player.php?tea_id=<?php echo $getDet_json['awayteam']['teamid']; ?>&pl_id=<?php echo $awaySMulti[0]['l_playerid']; ?>" class="thumbnail-link">
    <div style="background-color:#840017;" class="headshot">
      <img src="<?php if(isset($team1TopGoaliePhoto)){echo $team1TopGoaliePhoto;} ?>">
    </div>
    <div class="player-details">
      <div style="color:#840017" class="player-breakdown">
        <h3><?php echo $awaySaves[0]['firstname']." ".$awaySaves[0]['lastname']; ?></h3>
        <p>Saves: <?php echo $awaySaves[0]['saves']; ?></p>
      </div>
      <img src="<?php echo $getTeam1Minilogo; ?>">
    </div>
  </a>
</div>
<div class="top-player w25">
  <!--Tile iamge-->
  <a href="player.php?tea_id=<?php echo $getDet_json['awayteam']['teamid']; ?>&pl_id=<?php echo $homeSMulti[0]['l_playerid']; ?>" class="thumbnail-link">
    <div style="background-color:#ff7e21;" class="headshot">
      <img src="<?php if(isset($team2TopGoaliePhoto)){echo $team2TopGoaliePhoto;} ?>">
    </div>
    <div class="player-details">
      <div style="color:#ff7e21;" class="player-breakdown">
        <h3><?php echo $homeSaves[0]['firstname']." ".$homeSaves[0]['lastname']; ?></h3>
        <p>Saves: <?php echo $awaySaves[0]['saves']; ?></p>
      </div>
      <img src="<?php echo $getTeam2Minilogo; ?>">
    </div>
  </a>
</div>
