<?php
$thisPlayerHeight=$myPlayer['height'];
?>
<div class="stat-block w50 player-tile">
  <div class="stat-spot top-spot">
    <div class="stat-info">
      <div class="stat-image" style="background-image:url(<?php echo $myPlayer['photo']; ?>)"></div>
      <div class="stat-text">
        <!--Player stats pulled from Poinstreak-->
          <h4><?php echo $myPlayer['firstname']." ".$myPlayer['lastname']; ?></h4>
          <p>#<?php echo $myPlayer['jersey']." ".$thisTeam['mascot']; ?></p>
          <p><?php echo $thisTeam['teamname']; ?></p>
          <p><?php echo $myPlayer['position']; ?></p>
          <div class="player-dets">
            <p><strong>AGE:</strong> <?php echo $myPlayer['birthdate']; ?> </p>
            <p><strong>HT:</strong> <?php echo $thisPlayerHeight; ?> </p>
            <p><strong>WT:</strong> <?php echo $myPlayer['weight']; ?> </p>
          </div>
        <!--End of player stats pulled from Poinstreak-->
      </div>
    </div>
    <a href="player.php?tea_id=<?php echo $myTeamId; ?>&pl_id=<?php echo $myPlayer['playerid']; ?>">See More <span>›</span></a>
  </div>
</div>
