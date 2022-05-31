<?php

$url = 'https://api.pointstreak.com/lacrosse/league/structure/230/json';
$opts = array(
  'http'=>array(
    'method' => "GET",
    'header' => 'apikey: Xhk8vHpMfjWx1GIRkNZs'
  )
);

$context = stream_context_create($opts);
$content = file_get_contents($url, false, $context);

$l_json=json_decode($content, true);

$east_json=$l_json['league']['season'][0]['division'][0]['team'];
$west_json=$l_json['league']['season'][0]['division'][1]['team'];

?>
<div class="navbar" id="slide-navigation">
  <div class="desktop-nav">
		<div class="top-bar">
		  <div class="topBarWrap">
  			<div class="logoWrap left">
          <?php foreach($east_json as $n): ?>
            <div class="logo">
              <img src="<?php echo $n['logo']; ?>">
    			  </div>
          <?php endforeach; ?>
  			</div>
  			<div class="logoWrap right">
          <?php foreach($west_json as $m): ?>
    			  <div class="logo">
              <img src="<?php echo $m['logo']; ?>">
    			  </div>
          <?php endforeach; ?>
  			  <div class="social">
            <a href="#" class="instagram" target="_blank"></a>
    				<a href="#" class="facebook" target="_blank"></a>
    				<a href="#" class="twitter" target="_blank"></a>
  			  </div>
  			</div>
		  </div>
		</div>

		<div class="main-nav-bar">
		  <div class="tag-menus">
			<div class="tags">
			  <h6 class="nav-tags show-navmenu logo"><a href="index.php"><img src="assets/header/nll_logo.png" /></a></h6>
			  <h6 class="nav-tags"><a <?php if(basename($_SERVER['PHP_SELF']) == 'news.php') echo 'class="active"'; ?> href="news.php">News</a></h6>
			  <h6 class="nav-tags"><a <?php if(basename($_SERVER['PHP_SELF']) == 'schedule.php') echo 'class="active"'; ?> href="schedule.php">Schedule</a></h6>
			  <h6 class="nav-tags"><a <?php if(basename($_SERVER['PHP_SELF']) == 'stats.php') echo 'class="active"'; ?> href="stats.php">Stats</a></h6>
			  <h6 class="nav-tags"><a <?php if(basename($_SERVER['PHP_SELF']) == 'players.php') echo 'class="active"'; ?> href="players.php">Players</a></h6>
			  <h6 class="nav-tags"><a href="#">Shop</a></h6>
			  <h6 class="nav-tags"><a href="#">Tickets</a></h6>
			  <h6 class="nav-tags"><a <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?> href="about.php">About</a></h6>
			</div>
		  </div>
		  <div class="search">
			<div class="navi-search">
			  <div class="search-close"></div>
			</div>
		  </div>
		  <!--<div ng-include src="'assets/templates/navbar/_menu_dropdown.html'"></div>-->
		  <div class='navbar-container' id="nav_container">
			<div class="slide-nav-container">
			  <div class="slide-nav">
				<div class="slide-panel"></div>
			  </div>
			</div>
		  </div>
		</div>
  </div>

  <div class="mobile-nav">
	<div class="mobile-burger">
	  <div class="button">
		<span></span>
		<span></span>
		<span></span>
	  </div>
	  <p>MENU</p>
	</div>
	<a href="index.php" class="mobile-logo"><img src="assets/header/nll_logo.png" /></a>
	<div class="navi-search mobile-search">
	  <div class="search-close"></div>
	</div>
	<div class="mobile-menu">
	  <div class="mobile-menu-wrap">
		<div class="mobile-close">
		  <span class="close-btn">×</span>
		  <p>CLOSE</p>
		</div>
		<h6 class="nav-tags"><a href="news.php">News</a></h6>
		<h6 class="nav-tags"><a href="schedule.php">Schedule</a></h6>
		<h6 class="nav-tags"><a href="stats.php">Stats</a></h6>
		<h6 class="nav-tags"><a href="players.php">Players</a></h6>
		<h6 class="nav-tags"><a href="#">Shop</a></h6>
		<h6 class="nav-tags"><a href="#">Tickets</a></h6>
		<h6 class="nav-tags"><a href="about.php">About</a></h6>
	  </div>
	</div>
  </div>
</div>
<div class="topBorder"></div>
<div class="search-bar-main-container closed">
	<div class="search-backing">
	  <div class="search-bar-inner-container">
      <div class="searchfield">
        <div class="search-topbar">
          <div class="search-input">
            <input type="text" placeholder="Search here...">
            <div class="search-icon"></div>
          </div>
        </div>
      </div>
	  </div>
    <div class="search-content">
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
      <?php include 'components/news-preview.php'; ?>
    </div>
	</div>
</div>
