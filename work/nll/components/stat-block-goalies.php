<?php
//Query all top goalies
$url5 = 'https://api.pointstreak.com/lacrosse/season/goalieleaders/15914/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context5 = stream_context_create($opts);
$content5 = file_get_contents($url5, false, $context5);

$gl_json=json_decode($content5, true);
$getGoalieJsonId=$gl_json['goalieleaders']['goalie'][0+$gl_index]['playerid'];

$thesePlayersJson = file_get_contents('./js/players.json');
$thesePlayersContent=json_decode($thesePlayersJson,true);

$thisgoaliesPhoto=null;

foreach($thesePlayersContent as $cGoalies){
  if($cGoalies['playerid']==$getGoalieJsonId){
    $thisgoaliesPhoto=$cGoalies['photo'];
  }
}
?>
<div class="stat-block w50 goalie">
  <?php if($gl_index=='0'){ ?>
    <?php if(isset($gl_json['goalieleaders']['goalie'][0+$gl_index])){ ?>
    <div class="stat-spot top-spot">

      <div class="stat-info">
        <div class="stat-image" style="background-image:url(<?php if(isset($thisgoaliesPhoto)){echo $thisgoaliesPhoto;} ?>)"></div>
        <div class="stat-text">
            <span class="number"><?php echo $gl_index+1; ?></span>
            <h4><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['firstname']." ".$gl_json['goalieleaders']['goalie'][0+$gl_index]['lastname']; ?></h4>
            <p>#<?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['jersey']; ?></p>
            <p><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['teamname']['$t']; ?></p>
            <div class="stat-value">
              <h5><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['saves']; ?></h5><p>saves</p>
            </div>
        </div>
      </div>
    </div>
    <?php } ?>
  <?php }elseif($gl_index=='3'){ ?>

    <?php if(isset($gl_json['goalieleaders']['goalie'][0+$gl_index])){ ?>
    <div class="stat-spot sub-spot" style="padding: 70px 15px;">
        <span class="number"><?php echo $gl_index+1; ?></span>
        <div class="stat-info">
          <h4><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['firstname']." ".$gl_json['goalieleaders']['goalie'][0+$gl_index]['lastname']; ?></h4>
          <p><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['jersey']; ?></p>
          <p><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['teamname']['$t']; ?></p>
        </div>
        <div class="stat-value">
          <h5><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['saves']; ?></h5>
          <p>saves</p>
        </div>
    </div>
    <?php } ?>

  <?php }else{ ?>

    <?php if(isset($gl_json['goalieleaders']['goalie'][0+$gl_index])){ ?>
    <div class="stat-spot sub-spot">
        <span class="number"><?php echo $gl_index+1; ?></span>
        <div class="stat-info">
          <h4><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['firstname']." ".$gl_json['goalieleaders']['goalie'][0+$gl_index]['lastname']; ?></h4>
          <p><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['jersey']; ?></p>
          <p><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['teamname']['$t']; ?></p>
        </div>
        <div class="stat-value">
          <h5><?php echo $gl_json['goalieleaders']['goalie'][0+$gl_index]['saves']; ?></h5>
          <p>saves</p>
        </div>
    </div>
    <?php } ?>

  <?php } ?>

  <?php if(isset($gl_json['goalieleaders']['goalie'][1+$gl_index])){ ?>
  <div class="stat-spot sub-spot">
      <span class="number"><?php echo $gl_index+2; ?></span>
      <div class="stat-info">
        <h4><?php echo $gl_json['goalieleaders']['goalie'][1+$gl_index]['firstname']." ".$gl_json['goalieleaders']['goalie'][1+$gl_index]['lastname']; ?></h4>
        <p><?php echo $gl_json['goalieleaders']['goalie'][1+$gl_index]['jersey']; ?></p>
        <p><?php echo $gl_json['goalieleaders']['goalie'][1+$gl_index]['teamname']['$t']; ?></p>
      </div>
      <div class="stat-value">
        <h5><?php echo $gl_json['goalieleaders']['goalie'][1+$gl_index]['saves']; ?></h5>
        <p>saves</p>
      </div>
  </div>
  <?php } ?>

  <?php if(isset($gl_json['goalieleaders']['goalie'][2+$gl_index])){ ?>
    <div class="stat-spot sub-spot">
        <span class="number"><?php echo $gl_index+3; ?></span>
        <div class="stat-info">
          <h4><?php echo $gl_json['goalieleaders']['goalie'][2+$gl_index]['firstname']." ".$gl_json['goalieleaders']['goalie'][2+$gl_index]['lastname']; ?></h4>
          <p><?php echo $gl_json['goalieleaders']['goalie'][2+$gl_index]['jersey']; ?></p>
          <p><?php echo $gl_json['goalieleaders']['goalie'][2+$gl_index]['teamname']['$t']; ?></p>
        </div>
        <div class="stat-value">
          <h5><?php echo $gl_json['goalieleaders']['goalie'][2+$gl_index]['saves']; ?></h5>
          <p>saves</p>
        </div>
    </div>


    <?php if($statsFullPlPage==false){ ?>
      <a class="btn red" href="stats-full-goalies.php">SEE FULL LIST</a>
    <?php } ?>

  <?php } ?>

  <?php $gl_index+=3; ?>
</div>
