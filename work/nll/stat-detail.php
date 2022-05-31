<?php

$url = 'https://api.pointstreak.com/lacrosse/season/standings/14886/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context = stream_context_create($opts);
$content = file_get_contents($url, false, $context);

$s_json=json_decode($content, true);


$url2 = 'https://api.pointstreak.com/lacrosse/season/standings/14886/json';
$opts2 = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context2 = stream_context_create($opts2);
$content2 = file_get_contents($url2, false, $context2);

$po_json=json_decode($content2, true);

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      <title>Stat Detail | NLL</title>
      <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include 'includes/nav.php'; ?>

        <div class="content">
          <div class="schedule feed">

            <div class="schedule">
              <?php include 'components/schedule-slider.php'; ?>
            </div>
            <div class="header-text-container">
              <div class="header-text">
                <h1>Stat Detail</h1>
              </div>

            </div>
            <div class="scaler">
              <div class="content-wrap">
                <div class="nll-bar stats sidebar-left w70">
                  <div class="stats-wrap">
                    <div class="stats-text">
                      <h3>STATS</h3>
                      <p>Est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                    </div>
                    <div class="season-stat-table">
                      <div class="table-label">
                        <h3>Regular Season</h3>
                      </div>
                      <div class="table-overflow">
                        <table>
                          <tr>
                            <th>Year</th>
                            <th>Team</th>
                            <th>GP</th>
                            <th>G</th>
                            <th>A</th>
                            <th>PTS</th>
                            <th>S</th>
                            <th>SPCT</th>
                            <th>SOG</th>
                            <th>SOGPCT</th>
                            <th>FO</th>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][0]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][0]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][0]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][0]['teamname'], 1, strlen($s_json['standings']['team'][0]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][0]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][0]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][0]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][0]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][0]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][0]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][1]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][1]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][1]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][1]['teamname'], 1, strlen($s_json['standings']['team'][1]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][1]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][1]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][1]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][1]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][1]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][1]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][2]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][2]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][2]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][2]['teamname'], 1, strlen($s_json['standings']['team'][2]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][2]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][2]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][2]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][2]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][2]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][2]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][3]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][3]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][3]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][3]['teamname'], 1, strlen($s_json['standings']['team'][3]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][3]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][3]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][3]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][3]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][3]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][3]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][4]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][4]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][4]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][4]['teamname'], 1, strlen($s_json['standings']['team'][4]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][4]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][4]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][4]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][4]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][4]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][4]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="season-stat-table">
                      <div class="table-label">
                        <h3>Post Season</h3>
                      </div>
                      <div class="table-overflow">
                        <table>
                          <tr>
                            <th>Year</th>
                            <th>Team</th>
                            <th>GP</th>
                            <th>G</th>
                            <th>A</th>
                            <th>PTS</th>
                            <th>S</th>
                            <th>SPCT</th>
                            <th>SOG</th>
                            <th>SOGPCT</th>
                            <th>FO</th>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][0]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][0]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][0]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][0]['teamname'], 1, strlen($po_json['standings']['team'][0]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][0]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][0]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][0]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][0]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][0]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][0]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][1]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][1]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][1]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][1]['teamname'], 1, strlen($po_json['standings']['team'][1]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][1]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][1]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][1]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][1]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][1]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][1]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][2]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][2]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][2]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][2]['teamname'], 1, strlen($po_json['standings']['team'][2]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][2]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][2]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][2]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][2]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][2]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][2]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][3]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][3]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][3]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][3]['teamname'], 1, strlen($po_json['standings']['team'][3]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][3]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][3]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][3]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][3]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][3]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][3]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][4]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][4]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][4]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][4]['teamname'], 1, strlen($po_json['standings']['team'][4]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][4]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][4]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][4]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][4]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][4]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][4]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                        </table>
                      </div>
                    </div>

                    <div class="stats-text">
                      <h3>STATS</h3>
                      <p>Est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                    </div>
                    <div class="season-stat-table">
                      <div class="table-label">
                        <h3>Regular Season</h3>
                      </div>
                      <div class="table-overflow">
                        <table>
                          <tr>
                            <th>Year</th>
                            <th>Team</th>
                            <th>GP</th>
                            <th>G</th>
                            <th>A</th>
                            <th>PTS</th>
                            <th>S</th>
                            <th>SPCT</th>
                            <th>SOG</th>
                            <th>SOGPCT</th>
                            <th>FO</th>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][0]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][0]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][0]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][0]['teamname'], 1, strlen($s_json['standings']['team'][0]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][0]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][0]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][0]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][0]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][0]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][0]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][1]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][1]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][1]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][1]['teamname'], 1, strlen($s_json['standings']['team'][1]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][1]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][1]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][1]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][1]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][1]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][1]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][2]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][2]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][2]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][2]['teamname'], 1, strlen($s_json['standings']['team'][2]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][2]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][2]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][2]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][2]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][2]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][2]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][3]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][3]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][3]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][3]['teamname'], 1, strlen($s_json['standings']['team'][3]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][3]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][3]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][3]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][3]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][3]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][3]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($s_json['standings']['team'][4]['teamname'], 0, 1)=='x' || substr($s_json['standings']['team'][4]['teamname'], 0, 1)=='y' || substr($s_json['standings']['team'][4]['teamname'], 0, 1)=='z'){
                                  echo substr($s_json['standings']['team'][4]['teamname'], 1, strlen($s_json['standings']['team'][4]['teamname']));
                                }else{
                                  echo $s_json['standings']['team'][4]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $s_json['standings']['team'][4]['gp']; ?></td>
                            <td><?php echo $s_json['standings']['team'][4]['goalsfor']; ?></td>
                            <td><?php echo $s_json['standings']['team'][4]['goalsagainst']; ?></td>
                            <td><?php echo $s_json['standings']['team'][4]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $s_json['standings']['team'][2]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="season-stat-table">
                      <div class="table-label">
                        <h3>Post Season</h3>
                      </div>
                      <div class="table-overflow">
                        <table>
                          <tr>
                            <th>Year</th>
                            <th>Team</th>
                            <th>GP</th>
                            <th>G</th>
                            <th>A</th>
                            <th>PTS</th>
                            <th>S</th>
                            <th>SPCT</th>
                            <th>SOG</th>
                            <th>SOGPCT</th>
                            <th>FO</th>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][0]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][0]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][0]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][0]['teamname'], 1, strlen($po_json['standings']['team'][0]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][0]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][0]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][0]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][0]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][0]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][0]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][1]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][1]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][1]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][1]['teamname'], 1, strlen($po_json['standings']['team'][1]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][1]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][1]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][1]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][1]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][1]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][1]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][2]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][2]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][2]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][2]['teamname'], 1, strlen($po_json['standings']['team'][2]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][2]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][2]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][2]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][2]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][2]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][2]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][3]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][3]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][3]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][3]['teamname'], 1, strlen($po_json['standings']['team'][3]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][3]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][3]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][3]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][3]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][3]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][3]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>
                              <?php
                                if(substr($po_json['standings']['team'][4]['teamname'], 0, 1)=='x' || substr($po_json['standings']['team'][4]['teamname'], 0, 1)=='y' || substr($po_json['standings']['team'][4]['teamname'], 0, 1)=='z'){
                                  echo substr($po_json['standings']['team'][4]['teamname'], 1, strlen($po_json['standings']['team'][4]['teamname']));
                                }else{
                                  echo $po_json['standings']['team'][4]['teamname'];
                                }
                              ?>
                            </td>
                            <td><?php echo $po_json['standings']['team'][4]['gp']; ?></td>
                            <td><?php echo $po_json['standings']['team'][4]['goalsfor']; ?></td>
                            <td><?php echo $po_json['standings']['team'][4]['goalsagainst']; ?></td>
                            <td><?php echo $po_json['standings']['team'][4]['points']; ?></td>
                            <td>273</td>
                            <td><?php echo $po_json['standings']['team'][4]['winningpercentage']; ?></td>
                            <td>189</td>
                            <td>.776</td>
                            <td>0-0</td>
                          </tr>
                        </table>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="nll-bar sidebar-right w30">
                  <?php include 'components/master-sidebar.php'; ?>
                </div>
              </div>
            </div>
          </div>
          <?php include 'includes/footer.php'; ?>
        </div>
        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
