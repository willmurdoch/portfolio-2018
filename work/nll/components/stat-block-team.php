<?php
  $url = 'https://api.pointstreak.com/lacrosse/season/standings/15914/json';
  $opts = array(
    'http'=>array(
      'method' => "GET",
      'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
    )
  );

  $context = stream_context_create($opts);
  $content = file_get_contents($url, false, $context);

  $tl_json=json_decode($content, true);

  $tlTeamId=$tl_json['standings']['team'][0+$t_index]['teamid'];

  //in order to obtain team logos
  $url2 = 'https://api.pointstreak.com/lacrosse/league/structure/230/json';
  $opts = array(
    'http'=>array(
      'method' => "GET",
      'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
    )
  );

  $context2 = stream_context_create($opts);
  $content2 = file_get_contents($url2, false, $context2);

  $tl_json2=json_decode($content2, true);
  $tlJson2=$tl_json2['league']['season'][0]['division'];

  foreach($tlJson2 as $tlDiv){
    foreach($tlDiv['team'] as $tlDivTeam){
      if($tlDivTeam['teamid']==$tlTeamId){
        $thisTeamLogoPicHere=$tlDivTeam['logo'];
      }
    }
  }
?>
<div class="stat-block w50 team">
  <?php if(isset($tl_json['standings']['team'][0+$t_index])){ ?>
  <div class="stat-spot top-spot">
    <label>GOALS</label>
    <div class="stat-info">
      <div class="stat-image" style="background-image:url(<?php echo $thisTeamLogoPicHere; ?>)"></div>
      <div class="stat-text">
        <span class="number"><?php echo $t_index+1; ?></span>
        <h4><span><?php echo $tl_json['standings']['team'][0+$t_index]['teamname']; ?></span> <?php echo $tl_json['standings']['team'][0+$t_index]['mascot']; ?></h4>
        <p>Stadium: Pepsi Center</p>
        <p>Manager: Pat Coyle</p>
        <div class="stat-value">
          <h5><?php echo $tl_json['standings']['team'][0+$t_index]['goalsfor']; ?></h5><p>GOALS <br>FOR</p>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php if(isset($tl_json['standings']['team'][1+$t_index])){ ?>
  <div class="stat-spot sub-spot">
    <span class="number"><?php echo $t_index+2; ?></span>
    <div class="stat-info">
      <h4><?php echo $tl_json['standings']['team'][1+$t_index]['teamname']; ?> <?php echo $tl_json['standings']['team'][1+$t_index]['mascot']; ?></h4>
      <p>Stadium: Air Canada Centre</p>
    </div>
    <div class="stat-value">
      <h5><?php echo $tl_json['standings']['team'][1+$t_index]['goalsfor']; ?></h5>
      <p>goals for</p>
    </div>
  </div>
  <?php } ?>

  <?php if(isset($tl_json['standings']['team'][2+$t_index])){ ?>
    <div class="stat-spot sub-spot">
      <span class="number"><?php echo $t_index+3; ?></span>
      <div class="stat-info">
        <h4><?php echo $tl_json['standings']['team'][2+$t_index]['teamname']; ?> <?php echo $tl_json['standings']['team'][2+$t_index]['mascot']; ?></h4>
        <p>Stadium: Infinite Energy Arena</p>
      </div>
      <div class="stat-value">
        <h5><?php echo $tl_json['standings']['team'][2+$t_index]['goalsfor']; ?></h5>
        <p>goals for</p>
      </div>
    </div>

    <?php if($statsFullPlPage==false){ ?>
      <a class="btn red" href="stats-full-teams.php">SEE FULL LIST</a>
    <?php } ?>

  <?php } ?>

  <?php $t_index+=3; ?>
</div>
