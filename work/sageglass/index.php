<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>Home | SageGlass</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.typekit.net/bso7fsa.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/chosen.min.css">
        <link rel="stylesheet" href="css/nice_menus_default.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body id="home">
    <?php include 'scripts.php'; ?>
    <!--[if lt IE 8]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include 'header.php'; ?>

		<div id="sageWrap">

			<!--Header-->
			<section class="hero lightShift">
				<div class="centerWrap">
					<div class="centerer">
						<div class="headline">
							<h2>
                DARE TO BE<br><span>DYNAMIC</span>
                <p style="font-size:2rem;margin-top:1rem;line-height:1em;font-weight:500;">Electrochromic Glass That Tints on Demand</p>
              </h2>
						</div>
					</div>
				</div>
        <div class="slideNavWrap lightNav">
          <div class="slideNav">
            <button class="current"></button>
            <button></button>
            <button></button>
            <button></button>
          </div>
        </div>
		<div class="imageFader">
			<div class="slide current" style="background-image:url('img/01_home_01.jpg');">
          </div>
          <div class="slide" style="background-image:url('img/01_home_02.jpg');">
          </div>
          <div class="slide" style="background-image:url('img/01_home_03.jpg');">
          </div>
          <div class="slide" style="background-image:url('img/01_home_04.jpg');">
          </div>
				</div>
			</section>


			<!--Icon Grid-->
			<section class="iconGrid center">
				<div class="vBorder">
					<img src="img/vBorder.png" alt="" />
				</div>

				<!--Scaler makes sure content never goes above a certain width-->
				<div class="scaler">
				  <!--bracketTop/bracketBottom controls if the black brackets appear-->
				  <header class="bracketTop bracketBottom">
						<h2>Dare to be Innovative</h2>
						<p>SageGlass represents nothing less than a fundamental shift in the way we experience buildings—the ultimate connector between our built and natural environments. Come discover the benefits of tintable electrochromic glass.</p>
					</header>
					<!--For icons - they're not as wide as text, use icons class-->
					<div class="icons">
						<!--Anchors to the corresponding section on the same page-->
						<div class="iconBox w25">
							<div class="iconImg">
								<img src="img/icon_sun.png" alt="" />
							</div>
							<div class="iconText">
								<h4>Occupant Comfort</h4>
                <p>By reducing glare and heat while letting natural light in, you can create better thermal and visual comfort and enjoy increased health and well-being.</p>
                <!-- <a href="#">Learn More</a> -->
							</div>
						</div>
            <div class="iconBox w25">
							<div class="iconImg">
								<img src="img/icon_eye.png" alt="" />
							</div>
							<div class="iconText">
								<h4>Outdoor Connection</h4>
                <p>Without blinds or shades, you can experience the beauty of the outdoors and enjoy windows the way they are meant to be enjoyed.</p>
                <!-- <a href="#">Learn More</a> -->
              </div>
						</div>
						<div class="iconBox w25">
							<div class="iconImg">
								<img src="img/icon_thermometer.png" alt="" />
							</div>
							<div class="iconText">
								<h4>Energy Savings</h4>
                <p>Reduce energy consumption by an average of 20% with sustainable design that can help you earn green labels such as LEED certification and more.</p>
                <!-- <a href="#">Learn More</a> -->
							</div>
						</div>
						<div class="iconBox w25">
							<div class="iconImg">
								<img src="img/icon_measure.png" alt="" />
							</div>
							<div class="iconText">
								<h4>Design Possibilities</h4>
                <p>Instead of letting the sun dictate decisions, enhance design freedom for architects with innovative technology. </p>
                <!-- <a href="#">Learn More</a> -->
							</div>
						</div>
					</div>
				</div>
			</section>
      <!--End icon grid section-->

      <!--Text goes over fixed backgrounds that update as you scroll-->
      <section class="scrollFadeWrap">

        <!--One of these of each section, data-count for fetching corresponding background image, ID for direct linking-->
        <div data-count="1" id="open" class="fader current">
            <div class="centerWrap">
              <div class="centerer">
                <!--The yellow box is set here-->
                <div class="framedBox">
                    <div class="boxConstraint">
                      <div class="framedIcon">
                        <img src="img/icon_eye.png" alt="" />
                      </div>
                      <div class="framedText">
                        <h3>Dynamic Glass Products</h3>
                        <p>SageGlass doesn’t just improve buildings, it inspires a new way of thinking about glass. By creating a product that tints on demand and improves the human experience in a built environment, we’ve revolutionized the purpose and possibilities of glass.</p>
                        <a class="ctaBtn" href="#">Learn More</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div data-count="2" id="energize" class="fader">
            <div class="centerWrap">
              <div class="centerer">
                <div class="framedBox">
                    <div class="boxConstraint">
                      <div class="framedIcon">
                        <img src="img/icon_sun.png" alt="" />
                      </div>
                      <div class="framedText">
                        <h3>Benefits of Electrochromic Glass</h3>
                        <p>Electrochromic glass can reduce costs for building owners, increase energy efficiency and improve occupant comfort. But the benefits don’t end there—check out our FAQ section to learn what else is possible with SageGlass.</p>
                        <a class="ctaBtn" href="#">Learn More</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div data-count="3" id="possibilities" class="fader">
            <div class="centerWrap">
              <div class="centerer">
                <div class="framedBox">
                    <div class="boxConstraint">
                      <div class="framedIcon">
                        <img src="img/icon_thermometer.png" alt="" />
                      </div>
                      <div class="framedText">
                        <h3>SageGlass Portfolio</h3>
                        <p>Learn how SageGlass responds dynamically to solar control and see the range of different industries that have benefited from our technology, including Healthcare, Higher Education, Commercial Offices and Cultural Institutions. </p>
                        <a class="ctaBtn" href="#">See Our Portfolio</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div data-count="4" id="greener" class="fader">
            <div class="centerWrap">
              <div class="centerer">
                <div class="framedBox">
                    <div class="boxConstraint">
                      <div class="framedIcon">
                        <img src="img/icon_measure.png" alt="" />
                      </div>
                      <div class="framedText">
                        <h3>Saint-Gobain: Innovation leader</h3>
                        <p>From the glass mirrors in the Palace of Versailles to the glass pyramid at the Louvre, Saint-Gobain has been a world leader in human advancement and improvement for over 350 years. Today SageGlass carries this heritage of innovation into the future.
                        <a class="ctaBtn" href="#">Learn About Saint-Gobain</a>
                        <img style="width:150px;max-width:100%;float:right;margin: 1rem 0" src="img/sgFooterLogo.png" alt=""></p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!--End text sections-->

        <!--Backgrounds stored separately to prevent z-indexing issues with fixed position elements-->
        <div class="fixedBGs">
          <!--Navigation for this section-->
          <div class="fixedNav">
            <div class="navDot" data-count="1"></div>
            <div class="navDot" data-count="2"></div>
            <div class="navDot" data-count="3"></div>
            <div class="navDot" data-count="4"></div>
          </div>

          <!--One of these to correspond with each text section-->
          <div class="fixedBG fbg1 current" style="background-image:url(img/01_home_static_02.jpg)">
            <div class="fadeTip">
              <p>In full-tint mode, SageGlass blocks 99% of visible light, giving you virtually complete protection from the sun's harshest glare.</p>
              <div class="leftBorder"></div>
              <div class="rightBorder"></div>
              <div class="tail"></div>
            </div>
          </div>

          <div class="fixedBG fbg2" style="background-image:url(img/01_home_static_01.jpg)">
            <!--Text tip that stays locked to the fixed-position background-->
            <div class="fadeTip">
              <p>SageGlass allows for thermal and visual comfort while reducing energy demand</p>
              <!--Generate borders and tail/circle for the tip boxes-->
              <div class="leftBorder"></div>
              <div class="rightBorder"></div>
              <div class="tail"></div>
              <!--End visual flourishes-->
            </div>
          </div>

          <div class="fixedBG fbg3" style="background-image:url(img/01_home_static_04.jpg)">
            <div class="fadeTip">
              <p>Whether a facade is in clear mode or fully tinted, SageGlass gives the entire building a clean and consistent appearance without blinds or shades.</p>
              <div class="leftBorder"></div>
              <div class="rightBorder"></div>
              <div class="tail"></div>
              <div class="tail tail2"></div>
            </div>
          </div>

          <div class="fixedBG fbg4" style="background-image:url(img/01_home_static_05.jpg)"></div>

        </div>
        <!--End fixed position backgrounds-->

      </section>

      <!--Quote Slider-->
      <section class="quoteSlider sunburst">
        <div class="arrowNav">
          <button></button>
          <button></button>
        </div>
        <div class="dotNav">
          <button class="current" data-count="1"></button>
          <button data-count="2"></button>
          <button data-count="3"></button>
        </div>
        <div class="slide">
          <div class="scaler">
            <h5>SageGlass.</h5>
            <p>Project Client, Client Job Title <span>Client Institute Here</span></p>
          </div>
        </div>
        <div class="slide">
          <div class="scaler">
            <h5>SageGlass allowed us to maximize full use of our glass roof without compromising on energy efficiency and building space aesthetics. SageGlass allowed us to maximize full use of our glass roof without compromising on energy efficiency and building space aesthetics. SageGlass allowed us to maximize full use of our glass roof without compromising on energy efficiency and building space aesthetics.</h5>
            <p>Project Client, Client Job Title <span>Client Institute Here</span></p>
          </div>
        </div>
      </section>
      <!--End Quote Slider-->

      <!--Icon Grid-->
      <section class="iconGrid center">

        <!--Scaler makes sure content never goes above a certain width-->
        <div class="scaler">
          <!--bracketTop/bracketBottom controls if the black brackets appear-->
          <header class="bracketTop">
            <h3>Get In Touch</h3>
            <p>Interested in seeing SageGlass in action? Contact us today to receive more information and learn the many ways SageGlass can improve your environment. </p>
          </header>
          <div class="cta_btnWrap">
            <a href="#">Contact Us</a>
          </div>
          <!--For icons - they're not as wide as text, use icons class-->
        </div>
      </section>
      <!--End icon grid section-->

      <section class="resourceGrid center">
        <header class="bracketTop">
          <h3>Stay Up-To-Date</h3>
          <p>Check out what's new with our products and see who's talking about SageGlass.</p>
        </header>
        <div class="scaler">
          <a href="#" class="resourceBlock w3 video">
            <div class="hiddenBorder"></div>
            <div class="textWrap">
              <div class="imgWrap">
                <img src="img/placeholder_videoThumb.jpg" alt="" />
              </div>
              <h4>Video frame title here</h4>
            </div>
          </a>
          <a href="#" class="resourceBlock w3">
            <div class="hiddenBorder"></div>
            <div class="textWrap">
              <span class="date">Feb. 18, 2016</span>
              <h4>News update and title go here with enough room for multiple lines</h4>
              <p>News will not have an image so it doesn’t look empty when there isn’t one. It also allows for a longer lead in paragraph.</p>
              <span class="cta">Learn More</span>
            </div>
          </a>
          <a href="#" class="resourceBlock w3">
            <div class="hiddenBorder"></div>
            <div class="textWrap">
              <span class="date">Feb. 18, 2016</span>
              <h4>Callout for an Innovation Feature</h4>
              <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo.</p>
              <span class="cta">Learn More</span>
            </div>
          </a>
          <div class="cta_btnWrap">
            <a href="#">See More Innovations</a>
          </div>
        </div>
      </section>


      <section class="iconGrid center">
        <div class="angleBorder">
          <img src="img/angleBorder_white.png" alt="" />
        </div>

        <!--Scaler makes sure content never goes above a certain width-->
        <div class="scaler">
          <!--bracketTop/bracketBottom controls if the black brackets appear-->
          <header class="bracketTop bracketBottom">
            <h2>WHY SAGEGLASS?</h2>
            <p>SageGlass allows architects to design environments that offer an unobstructed connection to the natural world, and all the health and comfort benefits that come with it.</p>
          </header>
          <!--For icons - they're not as wide as text, use icons class-->
          <div class="icons">
            <!--Anchors to the corresponding section on the same page-->
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/sg350_new.png" alt="" />
              </div>
              <div class="iconText">
                <h4>A History of Innovation</h4>
                <p>SageGlass is backed by 350 years of building science expertise that only Saint-Gobain, the world leader in sustainable environments, can provide.</p>
              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/icon_patents.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Creating an Industry</h4>
                <p>SageGlass isn’t just the leader in electrochromic glass—in 1989, we were the first to develop the technology.</p>
              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/icon_countries.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Growing a Movement</h4>
                <p>Since the first construction project using SageGlass, we have installed electrochromic glass in 700 projects and iconic buildings worldwide.</p>
              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/icon_team.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Building a Partnership</h4>
                <p>When you choose SageGlass, we’re with you from start to finish and beyond, providing not just customer service, but a true partnership.</p>
              </div>
            </div>
          </div>
          <div class="cta_btnWrap">
            <a href="#">Learn More</a>
          </div>
        </div>
      </section>

		</div>
    <?php include 'footer.php'; ?>


    </body>
</html>
