<!DOCTYPE html>
<html>
	<head>
		<!--Pull in all styles/meta info-->
		<?php include 'partials/head.php'; ?>
	</head>
  <body class="has-hero carpet">
		<!--Pull in the nav-->
		<?php include 'partials/nav.php'; ?>

		<!--Hero template option 1-->
		<section class="hero">
			<div class="hero-text center">
				<h1>CARPET</h1>
			</div>
			<div class="heroSlides">
				<div class="slide current" style="background-image:url(img/carpet/header.jpg);"></div>
			</div>
		</section>

		<!--Image/text split option 3-->
		<section class="split medium right">
			<!--Scaler constrains the content so it is only as wide as it is in layout-->
			<div class="scaler">
				<div class="split-image">
					<img src="img/carpet/possibilities.jpg" alt="" />
				</div>
				<div class="split-text">
					<!--Text wrap is for constraining, moving, etc al of the text at once, without influencing the image next to it-->
					<div class="text-wrap">
						<h2>Uncover the<br>possibilities</h2>
						<p>Venture into a world where boundaries are made to be broken and imaginations are meant to run wild. A place that’s so rich and elegant, it’s like dreaming out loud. Step inside and discover the softness, the purity and the luxury of Sorona carpets.</p>
					</div>
				</div>
			</div>
		</section>

		<!--Image/text split option 3-->
		<section class="split medium left">
			<!--Scaler constrains the content so it is only as wide as it is in layout-->
			<div class="scaler">
				<div class="split-image">
					<img src="img/carpet/better.jpg" alt="" />
				</div>
				<div class="split-text">
					<!--Text wrap is for constraining, moving, etc al of the text at once, without influencing the image next to it-->
					<div class="text-wrap">
						<h2>Stand for<br>something<br>better</h2>
						<p>Designing carpets with sustainable fibers means keeping an ear to the ground. It means walking the forest floor, feeling the grass grow, listening to our planet. It means using renewable materials that bounce back naturally, resist stains naturally and feel as naturally soft as the earth beneath our feet.</p>
					</div>
				</div>
			</div>
		</section>

		<!--Center text section-->
		<section class="center-text bordered2">
			<div class="scaler">
				<h3>Take a step,<br>or a thousand</h3>
				<p>Whether in residential or commercial spaces, Sorona<sup>&reg;</sup> carpets are so much more than flooring. They’re designed to become the centerpiece of any room they’re in.</p>
			</div>
		</section>

		<!--Icon grid-->
		<section class="icon-grid">
			<div class="scaler">
				<!--Icon-->
				<div class="icon-area">
					<img src="img/carpet/icons/softness.png" alt="" />
					<div class="icon-text">
						<h5>Softness:</h5>
						<p>These fibers are designed to retain their shape and texture over the course of everyday wear.</p>
					</div>
				</div>
				<!--Icon-->
				<div class="icon-area">
					<img src="img/carpet/icons/purity.png" alt="" />
					<div class="icon-text">
						<h5>Purity:</h5>
						<p>The fibers naturally resist odors and stains. No additives, no applied chemicals. Just 100% Sorona, pure and simple.</p>
					</div>
				</div>
				<!--Icon-->
				<div class="icon-area">
					<img src="img/carpet/icons/durability.png" alt="" />
					<div class="icon-text">
						<h5>Durability:</h5>
						<p>These fibers are designed to retain their shape and texture over the course of everyday wear.</p>
					</div>
				</div>
				<!--Icon-->
				<div class="icon-area">
					<img src="img/carpet/icons/patented.png" alt="" />
					<div class="icon-text">
						<h5>Patented Technology:</h5>
						<p>Made from a unique PTT molecular structure designed for maximizing performance.</p>
					</div>
				</div>
				<!--Icon-->
				<div class="icon-area">
					<img src="img/carpet/icons/stain.png" alt="" />
					<div class="icon-text">
						<h5>Stain Resistance:</h5>
						<p>Permanent stain resistance is built right into the fiber – not topically applied – so it won’t wash or wear off.</p>
					</div>
				</div>
				<!--Icon-->
				<div class="icon-area">
					<img src="img/carpet/icons/odor.png" alt="" />
					<div class="icon-text">
						<h5>Odor Resistance:</h5>
						<p>The fibers naturally resist odors and stains. No additives, no applied chemicals. Just 100% Sorona, pure and simple.</p>
					</div>
				</div>
			</div>
		</section>

		<!--Full image background option 2-->
		<section class="fullImage right">
			<div class="scaler">
				<div class="scrollWrap">
					<img class="lines" src="img/carpet/lines.png" alt="" />
					<div class="textWrap">
						<h4>Immerse Yourself<br>in Pure Luxury</h4>
					</div>
				</div>
			</div>
			<div class="background" style="background-image:url(img/carpet/eco-luxe.jpg);"></div>
		</section>

		<!--Partner logos-->
		<!-- <section class="partner-logos">
			<div class="scaler">
				<div class="logos-header">
					<h3>Brand Partners</h3>
					<p>We're proud of the company we keep.</p>
				</div>
				<div class="logo-wrap">
					<?php
						$directory = "img/carpet/partners/";
						$images = glob($directory . "*.png");
						foreach($images as $image){
						  echo '<div class="logo"><img src="'.$image.'" /></div>';
						}
					?>
				</div>
			</div>
		</section> -->

		<!--Case Studies-->
		<section class="case-studies">
			<div class="cs-header">
				<h3>Case &bullet; Studies</h3>
			</div>
			<div class="cs-fader">
				<div class="cs-wrap">
					<?php for($x = 0; $x < 3; $x++): ?>
						<div class="cs-slide<?php if($x == 0) echo ' current'; ?>">
							<?php for($i = 0; $i < 4; $i++): ?>
								<a href="#" class="cs-item">
									<div class="cs-backing" style="background-image:url(img/cs-placeholder.jpg);"></div>
									<div class="cs-text">
										<h5>Sorona collaborates with Royal Robbins</h5>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
										<span class="link">Read More</span>
									</div>
								</a>
							<?php endfor; ?>
						</div>
					<?php endfor; ?>
				</div>
			</div>
			<div class="cs-nav">
				<div class="prev-arrow disabled">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="43px" height="20px">
						<path fill-rule="evenodd"  fill="rgb(55, 32, 11)" d="M43.000,11.000 L3.122,11.000 L10.608,18.485 L9.901,19.193 L1.416,10.708 L0.709,10.000 L1.416,9.293 L9.901,0.808 L10.608,1.515 L3.123,9.000 L43.000,9.000 L43.000,11.000 ZM2.123,10.000 L3.000,10.878 L3.000,9.123 L2.123,10.000 Z"/>
					</svg>
				</div>
				<div class="dot-nav">
					<div class="current"></div>
					<div></div>
					<div></div>
				</div>
				<div class="next-arrow">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="43px" height="20px">
						<path fill-rule="evenodd"  fill="rgb(55, 32, 11)" d="M41.584,10.708 L33.099,19.193 L32.392,18.485 L39.877,11.000 L0.000,11.000 L0.000,9.000 L39.877,9.000 L32.392,1.515 L33.099,0.808 L41.584,9.293 L42.291,10.000 L41.584,10.708 ZM40.000,9.123 L40.000,10.878 L40.877,10.000 L40.000,9.123 Z"/>
					</svg>
				</div>
			</div>
		</section>

		<!--Pull in footer-->
		<?php include 'partials/footer.php'; ?>
		<!--Pull in scripts-->
		<?php include 'partials/scripts.php'; ?>
  </body>
</html>
