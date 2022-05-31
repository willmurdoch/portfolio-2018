<!DOCTYPE html>
<html>
	<head>
		<!--Pull in all styles/meta info-->
		<?php include 'partials/head.php'; ?>
	</head>
  <body class="inverted contact">
		<!--Pull in the nav-->
		<?php include 'partials/nav.php'; ?>

		<!-- Contact page content -->
		<section class="contact-header">
			<h1>CONTACT US</h1>
		</section>
		<section class="rep-picker">
			<h3>FIND A REPRESENTATIVE</h3>
			<div class="region-wrap">
				<div class="custom-select" id="region-select">
					<label><span>Select a Region</span></label>
					<label for="rep-info-1"><span>Mid-Atlantic, USA</span></label>
					<label for="rep-info-2"><span>East Coast, USA</span></label>
					<label for="rep-info-3"><span>West Coast, USA</span></label>
				</div>
			</div>
			<!--Reps for chosen area-->
			<div class="rep-info" id="rep-info-1">
				<div class="rep">
					<h4>Apparel</h4>
					<h5>John K. Smith</h5>
					<p>
						<span class="title">District Sales Mgr., Apparel</span>
						<a href="tel:610-987-3475,124">610.987.3475 x124</a>
						<a href="mailto:jsmith@dupontsorona.com">jsmith@dupontsorona.com</a>
					</p>
				</div>
				<div class="rep">
					<h4>Carpet</h4>
					<h5>Elizabeth Jenkins</h5>
					<p>
						<span class="title">District Sales Mgr., Carpet</span>
						<a href="tel:610-987-3475,187">610.987.3475 x187</a>
						<a href="mailto:ejenkins@dupontsorona.com">ejenkins@dupontsorona.com</a>
					</p>
				</div>
			</div>
			<!--End reps-->
			<!--Reps for chosen area-->
			<div class="rep-info" id="rep-info-2">
				<div class="rep">
					<h4>Apparel</h4>
					<h5>John K. Smith</h5>
					<p>
						<span class="title">District Sales Mgr., Apparel</span>
						<a href="tel:610-987-3475,124">610.987.3475 x124</a>
						<a href="mailto:jsmith@dupontsorona.com">jsmith@dupontsorona.com</a>
					</p>
				</div>
				<div class="rep">
					<h4>Carpet</h4>
					<h5>Elizabeth Jenkins</h5>
					<p>
						<span class="title">District Sales Mgr., Carpet</span>
						<a href="tel:610-987-3475,187">610.987.3475 x187</a>
						<a href="mailto:ejenkins@dupontsorona.com">ejenkins@dupontsorona.com</a>
					</p>
				</div>
			</div>
			<!--End reps-->
			<!--Reps for chosen area-->
			<div class="rep-info" id="rep-info-3">
				<div class="rep">
					<h4>Apparel</h4>
					<h5>John K. Smith</h5>
					<p>
						<span class="title">District Sales Mgr., Apparel</span>
						<a href="tel:610-987-3475,124">610.987.3475 x124</a>
						<a href="mailto:jsmith@dupontsorona.com">jsmith@dupontsorona.com</a>
					</p>
				</div>
				<div class="rep">
					<h4>Carpet</h4>
					<h5>Elizabeth Jenkins</h5>
					<p>
						<span class="title">District Sales Mgr., Carpet</span>
						<a href="tel:610-987-3475,187">610.987.3475 x187</a>
						<a href="mailto:ejenkins@dupontsorona.com">ejenkins@dupontsorona.com</a>
					</p>
				</div>
			</div>
			<!--End reps-->
			<div class="divider">
				<span>o&nbsp;&nbsp;r</span>
			</div>
		</section>
		<section class="contact-form">
			<h2>SUBMIT THIS FORM</h2>
			<form id="contactform" action="">
				<input type="text" name="firstname" placeholder="FIRST NAME">
				<input type="text" name="lastname" placeholder="LAST NAME">
				<input type="email" name="email" placeholder="EMAIL">
				<input type="text" name="tel" placeholder="PHONE NUMBER">
				<input type="text" name="company" placeholder="COMPANY">
				<input type="text" name="region" placeholder="REGION">
				<div class="message-wrapper">
					<label>MESSAGE</label>
					<textarea rows="8" class="message-box" type="textarea" name="message"></textarea><br>
					<input class="submit-button" type="submit" value="SUBMIT">
				</div>
			</form>
			<div class="thanks">
				<h3>Thank you!</h3>
				<p>We’ve received your message! Thanks for your interest in Sorona—someone from our team will be in touch with you soon.</p>
				<button id="reload-form">RELOAD FORM</button>
			</div>
		</section>


		<!--Pull in footer-->
		<?php include 'partials/footer.php'; ?>
		<!--Pull in scripts-->
		<?php include 'partials/scripts.php'; ?>
  </body>
</html>
