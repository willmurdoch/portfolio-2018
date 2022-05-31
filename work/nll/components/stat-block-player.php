<?php
$getPlayerJsonId=$pl_json['scoringleaders']['player'][0+$pl_index]['playerid'];
$thesePlayersJson = file_get_contents('./js/onloadpage/players.json');
$thesePlayersContent=json_decode($thesePlayersJson,true);

foreach($thesePlayersContent as $pC){
  if($pC['playerid']==$getPlayerJsonId){
    $thisPlayersPhoto=$pC['photo'];
    $lastPhotoUrl=$thisPlayersPhoto;
  }
}
?>
<div class="stat-block w50 player">
  <?php if($pl_index=='0'){ ?>
    <?php if(isset($pl_json['scoringleaders']['player'][0+$pl_index])){ ?>
    <div class="stat-spot top-spot">
      <div class="stat-info">
        <div class="stat-image" style="background-image:url(<?php echo $thisPlayersPhoto; ?>)"></div>
        <div class="stat-text">
            <span class="number"><?php echo $pl_index+1; ?></span>
            <h4><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['firstname']." ".$pl_json['scoringleaders']['player'][0+$pl_index]['lastname']; ?></h4>
            <p>#<?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['jersey']." ".$pl_json['scoringleaders']['player'][0+$pl_index]['position']; ?></p>
            <p><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['teamname']['$t']; ?></p>
            <div class="stat-value">
              <h5><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['goals']; ?></h5><p>GOALS</p>
            </div>
        </div>
      </div>
    </div>
    <?php } ?>
  <?php }elseif($pl_index=='3'){ ?>

    <?php if(isset($pl_json['scoringleaders']['player'][0+$pl_index])){ ?>
    <div class="stat-spot sub-spot" style="padding: 70px 15px;">
        <span class="number"><?php echo $pl_index+1; ?></span>
        <div class="stat-info">
          <h4><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['firstname']." ".$pl_json['scoringleaders']['player'][0+$pl_index]['lastname']; ?></h4>
          <p><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['jersey']." ".$pl_json['scoringleaders']['player'][0+$pl_index]['position']; ?></p>
          <p><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['teamname']['$t']; ?></p>
        </div>
        <div class="stat-value">
          <h5><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['goals']; ?></h5>
          <p>goals</p>
        </div>
    </div>
    <?php } ?>

  <?php }else{ ?>

    <?php if(isset($pl_json['scoringleaders']['player'][0+$pl_index])){ ?>
    <div class="stat-spot sub-spot">
        <span class="number"><?php echo $pl_index+1; ?></span>
        <div class="stat-info">
          <h4><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['firstname']." ".$pl_json['scoringleaders']['player'][0+$pl_index]['lastname']; ?></h4>
          <p><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['jersey']." ".$pl_json['scoringleaders']['player'][0+$pl_index]['position']; ?></p>
          <p><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['teamname']['$t']; ?></p>
        </div>
        <div class="stat-value">
          <h5><?php echo $pl_json['scoringleaders']['player'][0+$pl_index]['goals']; ?></h5>
          <p>goals</p>
        </div>
    </div>
    <?php } ?>

  <?php } ?>

  <?php if(isset($pl_json['scoringleaders']['player'][1+$pl_index])){ ?>
  <div class="stat-spot sub-spot">
      <span class="number"><?php echo $pl_index+2; ?></span>
      <div class="stat-info">
        <h4><?php echo $pl_json['scoringleaders']['player'][1+$pl_index]['firstname']." ".$pl_json['scoringleaders']['player'][1+$pl_index]['lastname']; ?></h4>
        <p><?php echo $pl_json['scoringleaders']['player'][1+$pl_index]['jersey']." ".$pl_json['scoringleaders']['player'][1+$pl_index]['position']; ?></p>
        <p><?php echo $pl_json['scoringleaders']['player'][1+$pl_index]['teamname']['$t']; ?></p>
      </div>
      <div class="stat-value">
        <h5><?php echo $pl_json['scoringleaders']['player'][1+$pl_index]['goals']; ?></h5>
        <p>goals</p>
      </div>
  </div>
  <?php } ?>

  <?php if(isset($pl_json['scoringleaders']['player'][2+$pl_index])){ ?>
    <div class="stat-spot sub-spot">
        <span class="number"><?php echo $pl_index+3; ?></span>
        <div class="stat-info">
          <h4><?php echo $pl_json['scoringleaders']['player'][2+$pl_index]['firstname']." ".$pl_json['scoringleaders']['player'][2+$pl_index]['lastname']; ?></h4>
          <p><?php echo $pl_json['scoringleaders']['player'][2+$pl_index]['jersey']." ".$pl_json['scoringleaders']['player'][2+$pl_index]['position']; ?></p>
          <p><?php echo $pl_json['scoringleaders']['player'][2+$pl_index]['teamname']['$t']; ?></p>
        </div>
        <div class="stat-value">
          <h5><?php echo $pl_json['scoringleaders']['player'][2+$pl_index]['goals']; ?></h5>
          <p>goals</p>
        </div>
    </div>


    <?php if($statsFullPlPage==false){ ?>
      <a class="btn red" href="stats-full-players.php">SEE FULL LIST</a>
    <?php } ?>

  <?php } ?>

  <?php $pl_index+=3; ?>
</div>
