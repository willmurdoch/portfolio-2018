
<div class="schedule-tile">

  <!--Date and Time Info-->
  <div class="tile-header">
    <?php
      $thisLongDate=DateTime::createFromFormat('Y-m-d',$gj['longdate']);
      $thisLongDate=$thisLongDate->format('F d, Y');
    ?>
    <span class="dt"><strong><?php echo $thisLongDate; ?></strong> at <strong><?php echo $gj['time']; ?></strong></span>
    <span class="place"><?php echo $gj['arena']; ?></span>
  </div>

  <!--Team details column-->
  <div class="team-wrap">
    <!--Individual team details-->
    <div class="team">
      <div class="logo">
        <img src="<?php echo $gj['away']['logo']; ?>">
      </div>
      <div class="dets">
        <span class="loc"><?php echo $gj['away']['city']; ?></span>
        <span class="name"><?php echo $gj['away']['mascot']; ?></span>
        <div class="standings">
          <p><?php echo $gj['away']['standings'] ?></p>
          <span>|</span>
          <a href="standings.php">Full Standings &gt;</a>
        </div>
      </div>
    </div>

    <!--Separator-->
    <span class="at">at</span>

    <!--Individual team details-->
    <div class="team">
      <div class="logo">
        <img src="<?php echo $gj['home']['logo']; ?>">
      </div>
      <div class="dets">
        <span class="loc"><?php echo $gj['home']['city']; ?></span>
        <span class="name"><?php echo $gj['home']['mascot']; ?></span>
        <div class="standings">
          <p><?php echo $gj['home']['standings'] ?></p>
          <span>|</span>
          <a href="standings.php">Full Standings &gt;</a>
        </div>
      </div>
    </div>
  </div>

  <!--Viewing Info-->
  <div class="viewing">
    <p>US TV Listing:<br><?php if(isset($gj['homebroadcaster'])){ echo $gj['homebroadcaster']; } ?></p>
    <p>Canada TV Listing:<br><?php if(isset($gj['homebroadcaster'])){ echo $gj['homebroadcaster']; } ?></p>
    <p>Online:<br>NLL Live Stream</p>
  </div>

  <!--Linkage-->
  <div class="linkage">
    <a class="btn red" href="schedule-past-detail.php?g_id=<?php echo $gj['gameid']; ?>">More Details</a>
  </div>

</div>
