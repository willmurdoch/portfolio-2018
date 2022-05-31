<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php
$parentPage = $_SERVER["REQUEST_URI"];
$parentClass = '';
if($parentPage == '/'){
	$parentClass = 'expanded';
}
?>
<nav class="<?php echo $parentClass; ?>">
	<div class="sgBar">
		<div class="scaler">
			<div class="stGobainSites">
				<a href="http://saint-gobain.com/en" target="_blank">SAINT-GOBAIN</a><span>|</span><a href="http://www.saint-gobain350years.com/#!/en" target="_blank">350 years site</a>
			</div>
			<div class="stGobainSearch">
				<a href="http://www.saint-gobain-northamerica.com/search" class="sgSearch" target="_blank"></a>
			</div>
			<div class="navBtn menuparent langPicker">
				<p>language: <span id="lang">EN</span></p>
				<ul>
					<li><a href="#">中国</a></li>
					<li><a href="#">France</a></li>
					<li><a href="#">UK</a></li>
					<li><a href="#">Deutschland</a></li>
				</ul>
			</div>

		</div>
	</div>

	<div class="scaler">
	  <div class="leftLinks">
	    <a href="index.php" id="logo"><img src="img/logo.png" alt="SageGlass"><!--<img class="sgBridge" src="img/sgLogo.png" alt="Saint-Gobain" />--></a>
			<div class="desktopNav">
		    <ul class="nice-menu nice-menu-down nice-menu-main-menu nice-menus-processed sf-js-enabled sf-arrows" id="nice-menu-1">
		      <li class="menu-378 menu-path-front first odd  top"><a href="products.php" >Products</a></li>
		      <li class="menu-376 menu-path-front  even  top"><a href="portfolio.php" >Portfolio</a></li>
		      <li class="menu-377 menuparent  menu-path-front  odd  top"><span class="top nolink">Segments</span>
		        <ul style="display: none;">
		          <li class="menu-381 menu-path-front first odd  second"><a href="healthcare.php" >Healthcare</a></li>
		          <li class="menu-380 menu-path-front  even  second"><a href="education.php" >Higher Education</a></li>
		          <li class="menu-382 menu-path-front  odd  second"><a href="commercial.php" >Commercial</a></li>
		          <li class="menu-383 menu-path-front  even last second"><a href="culture.php" >Cultural Institutions</a></li>
		        </ul>
		      </li>
			   <li class="menu-367 menuparent  menu-path-front  odd  top"><span class="top nolink">Company</span>
		        <ul style="display: none;">
		          <li class="menu-381 menu-path-front first odd  second"><a href="company.php" >Overview</a></li>
		          <li class="menu-380 menu-path-front  even  second"><a href="company.php" >About</a></li>
		          <li class="menu-382 menu-path-front  odd  second"><a href="company.php" >Events</a></li>
		          <li class="menu-383 menu-path-front  even last second"><a href="company.php" >FAQs</a></li>
		        </ul>
		      </li>
		      <li class="menu-375 menu-path-front  odd last top"><a class="top" href="contact.php" >Contact</a></li>
		    </ul>
			</div>
	  </div>

	  <div class="rightLinks">
			<div class="desktopNav">
		    <img class="navSpacer" src="img/navSpacer.png" alt="">
				<ul class="nice-menu nice-menu-down nice-menu-menu-secondary-header-menu nice-menus-processed sf-js-enabled sf-arrows" id="nice-menu-2">
		      <li class="menu-369 menu-path-front first odd top"><a href="news.php" title="" >news &amp; trends</a></li>
		      <li class="menu-370 menu-path-front  even top"><a href="videos.php" title="" >Videos</a></li>
		      <li class="menu-371 menu-path-front  odd last top"><a href="resources.php" title="" >Resources</a></li>
		    </ul>
			</div>
	  </div>
	</div>
	<div class="mobileBtn">
		<div class="topBar"></div>
		<div class="middleBar"></div>
		<div class="bottomBar"></div>
	</div>
	<div class="mobileNav">
		<div class="mobileMask">
			<ul class="nice-menu nice-menu-down nice-menu-main-menu nice-menus-processed sf-js-enabled sf-arrows" id="nice-menu-1">
				<li class="menu-378 menu-path-front first odd  top"><a href="products.php" >Products</a></li>
				<li class="menu-376 menu-path-front  even  top"><a href="portfolio.php" >Portfolio</a></li>
				<li class="menu-377 menuparent  menu-path-front  odd  top"><span class="top nolink">Industry Benefits</span>
					<ul style="display: none;">
						<li class="menu-381 menu-path-front first odd  second"><a href="healthcare.php" >Healthcare</a></li>
						<li class="menu-380 menu-path-front  even  second"><a href="education.php" >Higher Education</a></li>
						<li class="menu-382 menu-path-front  odd  second"><a href="commercial.php" >Commercial</a></li>
						<li class="menu-383 menu-path-front  even last second"><a href="culture.php" >Cultural Institutions</a></li>
					</ul>
				</li>
				<li class="menu-367 menu-path-front  even  top"><a href="company.php" >Company</a></li>
				<li class="menu-375 menu-path-front  odd last top"><a href="contact.php" >Contact</a></li>
				<li class="menu-369 menu-path-front first odd top"><a href="/news.php" title="" >news &amp; trends</a></li>
				<li class="menu-370 menu-path-front  even top"><a href="/videos.php" title="" >Videos</a></li>
				<li class="menu-371 menu-path-front  odd last top"><a href="/resources.php" title="" >Resources</a></li>
			</ul>
		</div>
	</div>
	<div class="darkener"></div>
</nav>
<div class="scaler" id="cartoucher">
  <a id="sgBranding" href="http://www.saint-gobain-northamerica.com/" target="_blank">
		<img id="sgLogo" src="https://www.sageglass.com/sites/all/themes/sage/img/sg_cartouche.png" alt="Saint-Gobain">
	</a>
	<a id="leadGen" href="contact.php" target="_blank">
		<img src="img/leadBtn.png" alt="Get in touch" />
	</a>
</div>
