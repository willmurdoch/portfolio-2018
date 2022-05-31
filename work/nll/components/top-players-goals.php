<?php
//get photo for top scorer in team 1
foreach($getTeam1Players as $zPlayer){
  if($zPlayer['playerid']==$awaySMulti[0]['l_playerid']){
    $team1TopPlayerPhoto=$zPlayer['photo'];
  }
}
//get photo for top scorer in team 2
foreach($getTeam2Players as $zPlayer){
  if($zPlayer['playerid']==$homeSMulti[0]['l_playerid']){
    $team2TopPlayerPhoto=$zPlayer['photo'];
  }
}

?>
<div class="top-player w25">
  <!--Tile iamge-->
  <a href="player.php?tea_id=<?php echo $getDet_json['awayteam']['teamid']; ?>&pl_id=<?php echo $awaySMulti[0]['l_playerid']; ?>" class="thumbnail-link">
    <div style="background-color:#840017;" class="headshot">
      <img src="<?php echo $team1TopPlayerPhoto; ?>">
    </div>
    <div class="player-details">
      <div style="color:#840017" class="player-breakdown">
        <h3><?php echo $awaySMulti[0]['l_fullname']; ?></h3>
        <p>Goals: <?php echo $awaySMulti[0]['timesAppeared']; ?></p>
      </div>
      <img src="<?php echo $getTeam1Minilogo; ?>">
    </div>
  </a>
</div>
<div class="top-player w25">
  <!--Tile iamge-->
  <a href="player.php?tea_id=<?php echo $getDet_json['awayteam']['teamid']; ?>&pl_id=<?php echo $homeSMulti[0]['l_playerid']; ?>" class="thumbnail-link">
    <div style="background-color:#ff7e21;" class="headshot">
      <img src="<?php echo $team2TopPlayerPhoto; ?>">
    </div>
    <div class="player-details">
      <div style="color:#ff7e21;" class="player-breakdown">
        <h3><?php echo $homeSMulti[0]['l_fullname']; ?></h3>
        <p>Goals: <?php echo $homeSMulti[0]['timesAppeared']; ?></p>
      </div>
      <img src="<?php echo $getTeam2Minilogo; ?>">
    </div>
  </a>
</div>
