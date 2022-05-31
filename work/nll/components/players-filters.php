
<div class="filters players">
  <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <fieldset>
    <span>SORT BY:</span>
    <div class="linkFilters">
      <a href="?lac_position=<?php echo $getTeamPosition; ?>&lac_team=<?php echo $myTeamId; ?>&lac_active=<?php echo $urlActive; ?>&lac_order=name" class="current">Name</a>
      <span>|</span>
      <a href="?lac_position=<?php echo $getTeamPosition; ?>&lac_team=<?php echo $myTeamId; ?>&lac_active=<?php echo $urlActive; ?>&lac_order=number">Number</a>
      <span>|</span>
      <a href="?lac_position=<?php echo $getTeamPosition; ?>&lac_team=<?php echo $myTeamId; ?>&lac_active=<?php echo $urlActive; ?>&lac_order=age">Age</a>
      <span>|</span>
      <a href="?lac_position=<?php echo $getTeamPosition; ?>&lac_team=<?php echo $myTeamId; ?>&lac_active=<?php echo $urlActive; ?>&lac_order=height">Height</a>
      <span>|</span>
      <a href="?lac_position=<?php echo $getTeamPosition; ?>&lac_team=<?php echo $myTeamId; ?>&lac_active=<?php echo $urlActive; ?>&lac_order=weight">Weight</a>
    </div>
  </fieldset>
  <fieldset>
    <select name="lac_position">
      <option <?php if($getTeamPosition=="POSITION"){ ?> selected <?php } ?>>POSITION</option>
      <option <?php if($getTeamPosition=="F"){ ?> selected <?php } ?> value="F">Forwards</option>
      <option <?php if($getTeamPosition=="T"){ ?> selected <?php } ?> value="T">Transition</option>
      <option <?php if($getTeamPosition=="D"){ ?> selected <?php } ?> value="D">Defenders</option>
      <option <?php if($getTeamPosition=="G"){ ?> selected <?php } ?> value="G">Goaltenders</option>
    </select>
    <select name="lac_team">
      <option disabled style="display: none;">TEAM&nbsp;</option>
      <!--Pull team options from Pointstreak-->
        <?php
        foreach($league_json[0]['teams'] as $divisionTeam){

        ?>
            <option
            <?php
              //add "selected" property if value matches the requested value
              if($myTeamId==$divisionTeam['id']){
            ?> selected <?php
              }
            ?> value="<?php echo $divisionTeam['id']; ?>">
              <?php
                echo $divisionTeam['name'];
                //echo $divisionTeam['teamname']." ".$divisionTeam['mascot'];
              ?>
            </option>
        <?php

        }
        ?>
      <!--End of pulling team options from Sports Rocket-->
    </select>
    <select name="lac_active">
      <option <?php if($isActive=="true"){ ?> selected <?php } ?>>Active</option>
      <option <?php if($isActive=="false"){ ?> selected <?php } ?>>Inactive</option>
    </select>
    <input type="submit" value="APPLY">
  </fieldset>
  </form>
</div>
