<div class="filters schedule">
  <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <fieldset>
    <span>SORT BY:</span>
    <div class="linkFilters">
      <a href="#" class="current">Division</a>
      <span>|</span>
      <a href="#">Team</a>
      <span>|</span>
      <a href="#">Live Stream</a>
      <span>|</span>
      <a href="#">Season</a>
    </div>
  </fieldset>
  <fieldset>
    <select name="sched_team">
      <option selected >TEAM</option>
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
    </select>
    <select name="sched_dates">
      <option selected>DATES</option>
      <?php
        for($i=1;$i<=sizeof($weeksArray);$i++){
          $thisWeekStart=$weeksArray['week '.$i];

          if($thisWeekStart==$getMyDate){
            echo "<option selected value=".$thisWeekStart."> Week ".$i." | ".$thisWeekStart."</option>";
          }else{
            echo "<option value=".$thisWeekStart."> Week ".$i." | ".$thisWeekStart."</option>";
          }

        }
      ?>
    </select>
    <input type="submit" value="APPLY">
  </fieldset>
  </form>
</div>
