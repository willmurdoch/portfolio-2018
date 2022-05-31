<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>Contact | SageGlass</title>
		<?php include 'head.php'; ?>
    </head>
    <body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-729 node-type-basic-page i18n-en page-contact">
		<?php include 'scripts.php'; ?>

    <!--[if lt IE 8]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include 'header.php'; ?>

		<div id="sageWrap" class="contact">

			<!--Header-->
			<section class="hero static">
				<div class="centerWrap">
					<div class="centerer">
						<div class="headline">
							<h2>Get In Touch</h2>
              <p>Interested in seeing SageGlass in action? Please connect with us to request a sample or get more information.</p>
						</div>
					</div>
				</div>
				<div class="imageFader">
					<div class="slide current" data-count="1" style="background-image:url('img/product_slide1.jpg');"></div>
				</div>
			</section>

      <section class="productHeadline center">
        <div class="vBorder">
          <img src="/sites/all/themes/sage/img/vBorder.png" alt="">
        </div>
        <div class="scaler">
          <header class="bracketTop">
            <h2 class="animIn">Contact</h2>
          </header>
        </div>
      </section>

      <section class="plainTextWrap">
        <div class="scaler">
          <div class="plainText">

            <section class="textGrid center" style="padding-top:0;">
              <div class="bracketTop">
                <header class="w5">
                  <div>
                    <h4>SageGlass <br>Headquarters</h4>
                    <p style="white-space:nowrap;">SAGE Electrochromics, Inc.
                      <br>2 Sage Way
                      <br>Faribault, MN 55021
                      <br><a style="color:#3b393a;font-weight:600;" href="tel:507-331-4848">507-331-4848</a> | <a style="color:#3b393a;font-weight:600;" href="tel:877-724-3321">877-724-3321</a></p>
                  </div>
                </header>
                <header class="w5">
                  <div>
                    <h4>SageGlass Europe <br>Headquarters</h4>
                    <p style="white-space:nowrap;">Vetrotech Saint-Gobain International AG
                      <br>Bernstrasse 43
                      <br>3175 Flamatt, SWITZERLAND
                      <br><a style="color:#3b393a;font-weight:600;" href="tel:+41 31 336 81 81">+41 31 336 81 81</a></p>
                  </div>
                </header>
              </div>
            </section>

            <!--<section class="repPicker" style="padding-top:0;margin-top:-2rem;">
              <h4 style="text-align:center;margin-bottom:3rem;font-size:1.5rem;margin:0rem 0 2rem;font-weight:600;">FIND YOUR LOCAL REPRESENTATIVE:</h4>
                <form class="contactForm">
                  <select id="repStates">
                    <option>Select a State</option>
                    <option>Alabama</option>
                    <option>Arizona</option>
                  </select>
                </form>
                <div class="myRep notPopulated">
                  <h3>LeVar Burton</h3>
                  <a href="tel:800-588-2300">800-588-2300</a><span>|</span><a href="mailto:lburton@sageglass.com">lburton@sageglass.com</a>
                </div>
            </section>-->

            <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="contactForm">
              <h4 style="text-align:center;margin-bottom:3rem;font-size:1.5rem;margin:0 0 3rem;font-weight:600;">OR FILL OUT THE SHORT FORM BELOW:</h4>
              <input type="hidden" name="oid" value="00DA0000000J0Y7">
              <input type="hidden" name="retURL" value="http://live-sage-glass.pantheonsite.io/contact#submitted">
              <input type="hidden" name="lead_source" value="SAGE website">

              <fieldset class="split">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" maxlength="40" name="first_name" size="20" required="">
              </fieldset>
              <fieldset class="split right">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" maxlength="80" name="last_name" size="20" required="">
              </fieldset>
              <fieldset class="split">
                <label for="email">Email</label>
                <input type="email" id="email" maxlength="80" name="email" size="20" required="">
              </fieldset>
              <fieldset class="split right">
                <label for="phone">Phone</label>
                <input type="telephone" id="phone" maxlength="40" name="phone" size="20" required="">
              </fieldset>
              <fieldset>
                <label for="state">State/Province</label>
                <input type="text" id="state" maxlength="20" name="state" size="20" required="">
              </fieldset>
              <fieldset>
                <label for="country">Country</label>
                <input type="text" id="country" maxlength="40" name="country" size="20" required="">
                <br>
              </fieldset>
              <fieldset>
                <label>Message</label>
                <textarea id="00N1600000EhonEEAR" name="00N1600000EhonEEAR" rows="10" type="text" wrap="soft"></textarea>
              </fieldset>
              <input type="submit" name="submit" class="ctaBtn" value="Submit" style="margin:2rem auto 0;display:table;border:0;">
            </form>

            <style>
              .hero + .productHeadline header.bracketTop {
                display: none;
              }
              .plainTextWrap {
                padding-bottom: 0;
                margin-bottom: -3rem;
              }
            </style>
            <script>
              if (window.location.hash) {
                jQuery('form').html('<h4 style="font-size:2rem;text-align:center;">Thank you for your submission. Someone will reach out to you shortly.</h4>');
              }
            </script>
          </div>
        </div>
      </section>

      <section class="repPicker" style="padding-top:0;margin-top:-2rem;">
        <h4 style="text-align:center;margin-bottom:3rem;font-size:1.5rem;margin:0rem 0 2rem;font-weight:600;">FIND YOUR LOCAL REPRESENTATIVE:</h4>
        <form class="contactForm">
          <select id="repStates">
            <option>Select a State</option>
            <option>Alabama</option>
            <option>Alaska</option>
            <option>Arizona</option>
            <option>Arkansas</option>
            <option>California - Northern</option>
            <option>California - Southern</option>
            <option>Canada - British Columbia</option>
            <option>Canada - Central</option>
            <option>Canada - Ontario / Eastern</option>
            <option>Colorado</option>
            <option>Connecticut</option>
            <option>Delaware</option>
            <option>Europe</option>
            <option>Florida</option>
            <option>Georgia</option>
            <option>Hawaii</option>
            <option>Idaho</option>
            <option>Illinois</option>
            <option>Indiana</option>
            <option>Iowa</option>
            <option>Kansas</option>
            <option>Kentucky</option>
            <option>Louisiana</option>
            <option>Maine</option>
            <option>Maryland</option>
            <option>Massachusetts</option>
            <option>Mexico</option>
            <option>Michigan</option>
            <option>Middle East</option>
            <option>Minnesota</option>
            <option>Mississippi</option>
            <option>Missouri</option>
            <option>Montana</option>
            <option>Nebraska</option>
            <option>Nevada</option>
            <option>New Hampshire</option>
            <option>New Jersey&nbsp;- Northern</option>
            <option>New Jersey - Southern</option>
            <option>New Mexico</option>
            <option>New York</option>
            <option>North Carolina</option>
            <option>North Dakota</option>
            <option>Ohio</option>
            <option>Ohio - East</option>
            <option>Ohio&nbsp;-West</option>
            <option>Oklahoma</option>
            <option>Oregon</option>
            <option>Pennsylvania - Eastern</option>
            <option>Pennsylvania - Western</option>
            <option>Rhode Island</option>
            <option>South Carolina</option>
            <option>South Dakota</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Utah</option>
            <option>Vermont</option>
            <option>Virginia</option>
            <option>Washington</option>
            <option>West Virginia</option>
            <option>Wisconsin</option>
            <option>Wyoming</option>
          </select>
        </form>
        <div class="myRep notPopulated" data-territory="Middle East ">
          <h3 class="animIn">Alain Garnier </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:alain.garnier@saint-gobain.com">alain.garnier@saint-gobain.com</a> </div>
        <div class="myRep notPopulated" data-territory="Maine Massachusetts New Hampshire Ohio - East Pennsylvania - Western Rhode Island Vermont Virginia West Virginia ">
          <h3 class="animIn">Bill Myers </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:bill.myers@sageglass.com">bill.myers@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Tennessee ">
          <h3 class="animIn">Charles Howard </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:charles.howard@sageglass.com">charles.howard@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Maryland ">
          <h3 class="animIn">Chris Allen </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:chris.allen@sageglass.com">chris.allen@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Florida ">
          <h3 class="animIn">Elijah Black </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:elijah.black@sageglass.com">elijah.black@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Colorado ">
          <h3 class="animIn">Emma Dutton </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:emma.dutton@sageglass.com">emma.dutton@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Alabama Georgia Mississippi North Carolina South Carolina ">
          <h3 class="animIn">Jeremy Mack </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:jeremy.mack@sageglass.com">jeremy.mack@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Illinois ">
          <h3 class="animIn">Kevin Frisone </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:kevin.frisone@sageglass.com">kevin.frisone@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Connecticut New Jersey&nbsp;- Northern New York ">
          <h3 class="animIn">Kyle Faron </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:kyle.faron@sageglass.com">kyle.faron@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Delaware New Jersey - Southern Pennsylvania - Eastern ">
          <h3 class="animIn">Matt Cleary </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:matt.cleary@sageglass.com">matt.cleary@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Alaska California - Northern Canada - British Columbia Hawaii Nevada Oregon Washington Wyoming ">
          <h3 class="animIn">Michael Gray </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:michael.gray@sageglass.com">michael.gray@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Europe ">
          <h3 class="animIn">Olivier Gareil </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:olivier.gareil@saint-gobain.com">olivier.gareil@saint-gobain.com</a> </div>
        <div class="myRep notPopulated" data-territory="California - Southern ">
          <h3 class="animIn">Patrick Murphy </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:patrick.murphy@sageglass.com">patrick.murphy@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Canada - Central ">
          <h3 class="animIn">Terry Ferrise </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:terry.ferrise@sageglass.com">terry.ferrise@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Arizona Arkansas Canada - Ontario / Eastern Idaho Indiana Iowa Kansas Kentucky Louisiana Mexico Michigan Minnesota Missouri Montana Nebraska New Mexico North Dakota Ohio&nbsp;-West Oklahoma South Dakota Utah Wisconsin ">
          <h3 class="animIn">Tim Finley </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:tim.finley@sageglass.com">tim.finley@sageglass.com</a> </div>
        <div class="myRep notPopulated" data-territory="Texas ">
          <h3 class="animIn">Tyler Hall </h3>
          <a href="tel:"></a><span>|</span><a href="mailto:tyler.hall@sageglass.com">tyler.hall@sageglass.com</a> </div>
      </section>

      <section class="textGrid center">
        <div class="textWrap center">
          <div class="scaler">
            <div class="w3">
              <h4>GENERAL QUESTIONS:</h4>
              <p><a href="mailto:info@sageglass.com">info@sageglass.com</a></p>
            </div>
            <div class="w3">
              <h4>MEDIA INQUIRIES:</h4>
              <p>If you are a member of the media interested in an interview, contact <a href="mailto:sageglass@brownsteingroup.com">sageglass@brownsteingroup.com</a> <br>or <a href="#">sign up for press updates</a>.</p>
            </div>
            <div class="w3">
              <h4>CUSTOMER SUPPORT:</h4>
              <p><a href="mailto:archsolutions@sageglass.com">archsolutions@sageglass.com</a></p>
            </div>
          </div>
        </div>
      </section>

      <section class="textGrid gray center">
        <div class="scaler">
          <header>
            <div class="bracketTop">
              <h3>What comes next?</h3>
              <p>After you reach out to us, there are many ways you can learn more about SageGlass and how <br>it can fit into your next project:</a></p>
            </div>
          </header>
        </div>
        <div class="textWrap center">
          <div class="scaler">
            <div class="w25">
              <h4>Learn on your time</h4>
              <p>Schedule a lunch at your location, so you can learn about SageGlass at your convenience.</p>
            </div>
            <div class="w25">
              <h4>Sample the product</h4>
              <p>Request a sample, so you can see how our technology works in person.</p>
            </div>
            <div class="w25">
              <h4>Watch the process</h4>
              <p>Visit our state-of-the-art manufacturing facility and see how SageGlass is made.</p>
            </div>
            <div class="w25">
              <h4>Get the experience</h4>
              <p>Schedule a visit to one of our completed projects, so you can experience the full effect of a building designed with SageGlass.</p>
            </div>
          </div>
        </div>
      </section>


		</div>
    <?php include 'footer.php'; ?>


    </body>
</html>
