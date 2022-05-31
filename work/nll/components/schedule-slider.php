<?php
/*
  $url = 'https://api.pointstreak.com/lacrosse/season/scoreboard/14886/json';
  $opts = array(
    'http'=>array(
      'method' => "GET",
      'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
    )
  );

  $context = stream_context_create($opts);
  $content = file_get_contents($url, false, $context);

  $score_json=json_decode($content, true);
  $sGame=$score_json['schedule']['game'];
  $gameStatus=$sGame[0]['gamestatus']['statusdisplay'];
*/
$content = file_get_contents('./js/onloadpage/schedule15914.json');
$sGame=json_decode($content,true);

?>
<!--Scoreboard-->
<div class="score-feed">
  <div class="score-arrow lBtn">&lsaquo;</div>
  <div class="scores-wrap">
    <div class="scores-all">

      <?php if(sizeof($sGame)<=12){
        foreach($sGame as $sg){
          $gameStatus=$sg['status'];
      ?>

        <!--Scoreboard tile-->
        <div class="table-wrap">
          <!--Past game-->
          <table class="score-block <?php if($gameStatus=="FINAL"){ ?>past<?php } ?>">
            <tr>
              <th><?php
                $gamedate=$sg['date'];
                echo $gamedate;
              ?></th>
              <th><?php
                if($gameStatus=="FINAL"){
                  echo $gameStatus;
                }else{
                  $gametime=$sg['time'];
                  echo $gametime;
                }
              ?></th>
            </tr>
            <tr>
              <td><?php echo $sg['away']['city']; ?></td>
              <td><?php echo $sg['away']['score']; ?></td>
            </tr>
            <tr class="winner">
              <td><?php echo $sg['home']['city']; ?></td>
              <td><?php echo $sg['home']['score']; ?></td>
            </tr>
          </table>
        </div>

      <?php
          }
        }else{
          for($x=0;$x<=11;$x++){
            $gameStatus=$sGame[$x]['status'];
      ?>

        <!--Scoreboard tile-->
        <div class="table-wrap">
          <!--Past game-->
          <table class="score-block <?php if($gameStatus=="FINAL"){ ?>past<?php } ?>">
            <tr>
              <th><?php
                $gamedate=$sGame[$x]['date'];
                echo $gamedate;
              ?></th>
              <th><?php
                if($gameStatus=="FINAL"){
                  echo $gameStatus;
                }else{
                  $gametime=$sGame[$x]['time'];
                  echo $gametime;
                }
              ?></th>
            </tr>
            <tr>
              <td><?php echo $sGame[$x]['away']['city']; ?></td>
              <td><?php echo $sGame[$x]['away']['score']; ?></td>
            </tr>
            <tr class="winner">
              <td><?php echo $sGame[$x]['home']['city']; ?></td>
              <td><?php echo $sGame[$x]['home']['score']; ?></td>
            </tr>
          </table>
        </div>

      <?php
          }
        }
      ?>

    </div>
  </div>
  <div class="score-arrow rBtn">&rsaquo;</div>
</div>
