<!DOCTYPE html>
<html>
	<head>
		<!--Pull in all styles/meta info-->
		<?php include 'partials/head.php'; ?>
	</head>
  <body class="has-hero home">
		<!--Pull in the nav-->
		<?php include 'partials/nav.php'; ?>

		<!--Hero template option 1-->
		<section class="hero tall focus">
			<div class="scrollWrap">
				<div class="hero-text center">
					<h1>Sorona</h1>
					<h2>Eco-efficient performance fiber</h2>
				</div>
				<div class="can-scroll">
					<div class="scrolly"></div>
					<p>Discover the feeling</p>
				</div>
			</div>
			<div class="heroSlides">
				<div class="slide current" style="background-image:url(img/header.jpg);"></div>
				<div class="slide" style="background-image:url(img/home_slide2.jpg);"></div>
				<div class="slide" style="background-image:url(img/home_slide3.jpg);"></div>
			</div>
		</section>

		<!--Hero template option 2-->
		<section class="hero tall">
			<div class="scrollWrap">
				<div class="scaler">
					<div class="hero-text double-text">
						<div class="left-text">
							<h2>Find the uncommon thread</h2>
						</div>
						<div class="right-text">
							<p>You've discovered it: a material that transforms fabrics into experiences and weaves luxury into the everday. <br>It's the fiber that defines softness and defies boundaries.</p>
						</div>
					</div>
					<div class="can-scroll">
						<div class="scrolly"></div>
						<p>Experience Sorona<sup>&reg;</sup></p>
					</div>
				</div>
			</div>
			<div class="heroSlides">
				<div class="slide current" style="background-image:url(img/sect1.jpg);"></div>
			</div>
		</section>

		<!--Image/text split option 1-->
		<section class="split left">
			<!--Scaler constrains the content so it is only as wide as it is in layout-->
			<div class="scaler">
				<div class="split-image">
					<img src="img/apparel.jpg" alt="" />
				</div>
				<div class="split-text">
					<!--Text wrap is for constraining, moving, etc al of the text at once, without influencing the image next to it-->
					<div class="text-wrap">
						<h2>Apparel</h2>
						<h3>Live with every fiber of your being</h3>
						<p>In your clothing, Sorona<sup>&reg;</sup> takes you boldly towards adventure and embraces you like an old friend. Wearing it is effortless, and living in it is an experience.</p>
						<a href="apparel.php" class="cta"><p>Explore</p></a>
					</div>
				</div>
			</div>
		</section>

		<!--Image/text split option 2-->
		<section class="split right">
			<!--Scaler constrains the content so it is only as wide as it is in layout-->
			<div class="scaler">
				<div class="split-image">
					<img src="img/carpet.jpg" alt="" />
				</div>
				<div class="split-text">
					<!--Text wrap is for constraining, moving, etc al of the text at once, without influencing the image next to it-->
					<div class="text-wrap">
						<h2>Carpet</h2>
						<h3>Make your everyday exceptional</h3>
						<p>Sorona’s lush, elegant carpets let you spend every day escaping the ordinary. They come with the kind of simple purity you can only find in nature and an untamed softness you wish you could melt into.</p>
						<a href="carpet.php" class="cta"><p>Explore</p></a>
					</div>
				</div>
			</div>
		</section>

		<!--Full image background option 1-->
		<section class="fullImage">
			<div class="scrollWrap">
				<div class="scaler">
					<div class="textWrap">
						<img src="img/tree.svg" alt="" />
						<h3>Be a force of nature</h3>
						<p>When you do good, you feel good. For us, that means treating the planet with respect—sourcing natural ingredients and reducing the carbon footprint of our production process. And for you, it means choosing better materials to wear and to work with.</p>
						<a class="cta" href="story.php"><p>Find out more</p></a>
					</div>
				</div>
			</div>
			<div class="background" style="background-image:url(img/landscape.jpg);"></div>
		</section>

		<!--Horizontal text section-->
		<section class="horiz-text">
			<div class="scaler">
				<div class="left-text">
					<h3>Talk to Us</h3>
				</div>
				<div class="right-text">
					<div class="text-wrap">
						<p>Sorona<sup>&reg;</sup> fiber is as versatile as your imagination—get in touch to learn more about what Sorona<sup>&reg;</sup> can do for you, your business or your project.</p>
						<a class="cta" href="contact.php"><p>Contact Us</p></a>
					</div>
				</div>
			</div>
		</section>

		<!--Pull in footer-->
		<?php include 'partials/footer.php'; ?>
		<!--Pull in scripts-->
		<?php include 'partials/scripts.php'; ?>
  </body>
</html>
