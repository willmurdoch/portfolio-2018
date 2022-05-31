
<div class="timehiddendiv">
  <?php
    $passedInDate=$_GET['g_date'];
    $getDetDt=DateTime::createFromFormat('Y-m-d H:i:s',$passedInDate);

    //current time
    $getCurrTime=new \DateTime();
    //getting difference between the 2 datetime objects
    $gameDateDiff=date_diff($getCurrTime,$getDetDt);
    $gameDateDiffString=$gameDateDiff->format('%D %H %I %S');

    $gdD=substr($gameDateDiffString,0,2);//days
    $gdH=substr($gameDateDiffString,3,2);//hours
    $gdM=substr($gameDateDiffString,6,2);//minutes
    $gdS=substr($gameDateDiffString,9,2);//seconds

    //echo $gameDateDiffString;

  ?>
</div>
<div class="days">
  <div class="on"><?php echo $gdD; ?></div>
  <div class="off">00</div>
  <p>Days</p>
</div>
<div class="hours">
  <div class="on"><?php echo $gdH; ?></div>
  <div class="off">00</div>
  <p>Hrs</p>
</div>
<div class="minutes">
  <div class="on"><?php echo $gdM; ?></div>
  <div class="off">00</div>
  <p>Mins</p>
</div>
<div class="seconds">
  <div class="on"><?php echo $gdS; ?></div>
  <div class="off">00</div>
  <p>Secs</p>
</div>
