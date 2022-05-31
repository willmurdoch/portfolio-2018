<?php
/*
$standingsCurrentSeason=15914;

$url = 'https://api.pointstreak.com/lacrosse/division/standings/87112/'.$standingsCurrentSeason.'/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context = stream_context_create($opts);
$content = file_get_contents($url, false, $context);

$json=json_decode($content, true);
*/
$content = file_get_contents('./js/onloadpage/standings.json');
$json=json_decode($content,true);
?>
<div class="sidebar-standings">
  <div class="standings-header">
    <p>STANDINGS</p>
  </div>
  <table>
    <tr>
      <th>Pos</th>
      <th>Team</th>
      <th>W</th>
      <th>L</th>
    </tr>
  </table>
  <table class="table-label">
    <tr>
      <th><p>Eastern Division</p></th>
    </tr>
  </table>
  <table>
    <tr>
      <td>1.</td>
      <td><?php echo $json[0][0]['teamname']; ?></td>
      <td><?php echo $json[0][0]['wins']; ?></td>
      <td><?php echo $json[0][0]['losses']; ?></td>
    </tr>
    <tr>
      <td>2.</td>
      <td><?php echo $json[0][1]['teamname']; ?></td>
      <td><?php echo $json[0][1]['wins']; ?></td>
      <td><?php echo $json[0][1]['losses']; ?></td>
    </tr>
  </table>

  <?php
  /*
  $url = 'https://api.pointstreak.com/lacrosse/division/standings/4079/'.$standingsCurrentSeason.'/json';
  $opts = array(
    'http'=>array(
      'method' => "GET",
      'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
    )
  );

  $context = stream_context_create($opts);
  $content = file_get_contents($url, false, $context);

  $json=json_decode($content, true);
  */
  ?>

  <table class="table-label">
    <tr>
      <th><p>Western Division</p></th>
    </tr>
  </table>
  <table>
    <tr>
      <td>1.</td>
      <td><?php echo $json[1][0]['teamname']; ?></td>
      <td><?php echo $json[1][0]['wins']; ?></td>
      <td><?php echo $json[1][0]['losses']; ?></td>
    </tr>
    <tr>
      <td>2.</td>
      <td><?php echo $json[1][1]['teamname']; ?></td>
      <td><?php echo $json[1][1]['wins']; ?></td>
      <td><?php echo $json[1][1]['losses']; ?></td>
    </tr>
  </table>
  <div class="linkage">
    <a href="standings.php">See Full Standings <span>›</span></a>
  </div>
</div>
