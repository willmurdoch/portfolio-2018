<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>Products | SageGlass</title>
		<?php include 'head.php'; ?>
    </head>
    <body class="page-products">
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
                <p style="font-size:0.75em;line-height:0.8em;text-transform:uppercase;">Dynamic Products<br>Drive Dynamic Spaces</p>
                <p style="font-size:2rem;line-height:1.5em;text-transform:none;">innovative dynamic glass</p>
                <style>
                .hero .headline{
                 padding-top: 5%;
                }
                </style>
                <script>
                jQuery(document).ready(function(){
                  var lightzoneIndex = 0;
                	jQuery('.hero button').each(function(){
                		lightzoneIndex++;
                		jQuery(this).html('<p>'+lightzoneIndex+'</p>');
                	});
                });
                </script>
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
  				<div class="slide current" style="background-image:url('img/products_t1.jpg');"></div>
          <div class="slide" style="background-image:url('img/products_t2.jpg');"></div>
          <div class="slide" style="background-image:url('img/products_t3.jpg');"></div>
          <div class="slide" style="background-image:url('img/products_t4.jpg');"></div>
        </div>
			</section>
      <section></section>
			<!--Section Headline-->
      <section class="iconGrid small center productsHeader">
				<div class="vBorder">
					<img src="img/vBorder.png" alt="" />
				</div>

				<!--Scaler makes sure content never goes above a certain width-->
				<div class="scaler">
				  <!--bracketTop/bracketBottom controls if the black brackets appear-->
				  <header class="bracketTop bracketBottom">
						<h2>Benefits of Dynamic Glass</h2>
						<p>SageGlass doesn't just improve buildings—it inspires a new way of thinking about glass. By creating a product that tints on demand and improves the human experience in a built environment, we've revolutionized the purpose and possibilities of glass.</p>
					</header>
					<!--For icons - they're not as wide as text, use icons class-->
					<div class="icons">
						<!--Anchors to the corresponding section on the same page-->
						<div class="iconBox w25">
							<div class="iconImg">
								<img src="img/icon_eye.png" alt="" />
							</div>
							<div class="iconText">
								<h4>Occupant<br>Comfort</h4>
                <p>By reducing glare and heat, you can create better thermal and visual comfort and enjoy increased productivity.</p>
                <!-- <a href="#">Learn More</a> -->
							</div>
						</div>
						<div class="iconBox w25">
							<div class="iconImg">
								<img src="img/icon_sun.png" alt="" />
							</div>
							<div class="iconText">
								<h4>Outdoor<br>Connection</h4>
                <p>Enhance design freedom for architects with innovative technology that goes beyond the aesthetic limits of shades and blinds.</p>
                <!-- <a href="#">Learn More</a> -->
							</div>
						</div>
						<div class="iconBox w25">
							<div class="iconImg">
								<img src="img/icon_thermometer.png" alt="" />
							</div>
							<div class="iconText">
								<h4>Energy <br>Savings</h4>
                <p>Reduce energy consumption by up to 20% and get LEED Certified with SageGlass.</p>
                <!-- <a href="#">Learn More</a> -->
							</div>
						</div>
						<div class="iconBox w25">
							<div class="iconImg">
								<img src="img/icon_measure.png" alt="" />
							</div>
							<div class="iconText">
								<h4>Design <br>Possibilities</h4>
                <p>Without blinds or shades, you can experience the beauty of the outdoors and enjoy windows the way they’re meant to be enjoyed.</p>
                <!-- <a href="#">Learn More</a> -->
							</div>
						</div>
					</div>
				</div>
			</section>

      <section class="videoSplit">
        <div class="scaler">
          <div class="w5 video" style="height: auto; padding: 0;">
            <video style="width: 100%; "controls>
              <source src="video/products.mp4" type="video/mp4">
            </video>
          </div>
          <div class="w5 text">
            <div class="textWrap">
              <h3 class="bracketTop">Innovative Smart Tint Technology</h3>
              <p>As the leader in electrochromic technology, our award-winning product is revolutionizing what glass can do in the built environment.</p>
              <a href="#" class="ctaBtn">How SageGlass Works</a>
              <a href="#" class="ctaBtn">See our FAQ</a>
            </div>
          </div>
        </div>
      </section>

      <!--Feature Split-->
      <section class="featureList">
        <!--Each split section is a "feature"-->
        <div class="featureWrap">
          <!--Text on one side-->
          <div class="featureText split">
            <!--Wrap text so it can be constrained separately from image-->
            <div class="textWrap">
              <div  class="bracketTop">
                <h3>Find your comfort zones with dynamic  glass</h3>
              </div>
              <p>Electrochromic technology gives SageGlass the power to tint on demand&mdash;from a darkened state that absorbs and reradiates away the sun’s unwanted heat and glare, to a clear state that maximizes daylight and solar energy.</p>
              <!--List of features-->
              <ul>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_lightzone.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>LightZone&trade;</h4>
                    <p>Only SageGlass provides you with the ability to create up to three tint zones plus a clear zone within a single pane of glass, so you can create the exact combination that fits your space. </p>
                    <a href="#">Link to Download</a>
                  </div>
                </li>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_tinting.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Dynamic Tinting</h4>
                    <p>Customized light-zoning strategies can use dynamic control to track the sun as it moves across the sky, so that occupants can always strike the ideal balance of comfort and daylighting.</p>
                    <a href="#">Link to Download</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!--Image (optional gallery) on the other-->
          <div class="featureImage split tintNav">
            <div class="carousel">
              <img class="slide current" data-count="1" src="img/product_feature2a.jpg" />
              <img class="slide" data-count="2" src="img/product_feature2a.jpg" />
              <img class="slide" data-count="3" src="img/product_feature2a.jpg" />
            </div>
            <!--Keep carousel at natural height despite absolute positioning-->
            <img class="sizer" src="img/product_feature2a.jpg" />
            <!--Slide navigation-->
            <div class="carousel_navWrap">
              <button class="current" data-count="1">1</button>
              <button data-count="2">2</button>
              <button data-count="3">3</button>
            </div>
          </div>
        </div>
        <!--End single feature-->
      </section>
      <!--End feature section-->


      <!--Feature Split-->
      <section class="featureList centerPhone">
        <!--Each split section is a "feature"-->
        <div class="featureWrap">
          <!--Text on one side-->
          <div class="featureText split">
            <!--Wrap text so it can be constrained separately from image-->
            <div class="textWrap">
              <div  class="bracketTop">
                <h3>Command <br>Performance</h3>
              </div>
              <p>Designing a built environment around occupant comfort means the occupants should be able to control that environment. Thanks to advanced proprietary algorithms, we’ve created a control system that can manage light, glare, energy use and color rendering based on occupancy, sunlight or building management systems.</p>
              <!--List of features-->
              <ul>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_automation.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Automation & Integration</h4>
                    <p>SageGlass can be tinted and cleared using automatic settings, manual controls or seamless integration with the existing building automation system. </p>
                    <a href="#">Link to Download</a>
                  </div>
                </li>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_mobile.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Mobile Controls</h4>
                    <p>In addition to built-in control panels, you can use our mobile app to fine-tune tint zones and save predefined scene settings for specific lighting effects from anywhere in the building.</p>
                    <a href="#">Link to Download</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!--iPhone in the middle-->
          <div class="iPhone">
            <div class="phoneFader"></div>
            <div class="phoneBtns">
              <a class="current" href="#" data-count="1"></a>
              <a href="#" data-count="2"></a>
              <a href="#" data-count="3"></a>
              <a href="#" data-count="4"></a>
            </div>
            <img src="img/iphone_tint.png" alt="" />
          </div>

          <!--Image (optional gallery) on the other-->
          <div class="featureImage split lightNav">
            <div class="carousel">
              <img class="slide current" data-count="1" src="img/03_tintlevels_1.jpg" />
              <img class="slide" data-count="2" src="img/product_feature3a.jpg" />
              <img class="slide" data-count="3" src="img/product_feature3a.jpg" />
              <img class="slide" data-count="4" src="img/03_tintlevels_4.jpg" />
            </div>
            <!--Keep carousel at natural height despite absolute positioning-->
            <img class="sizer" src="img/product_feature3a.jpg" />
            <!--Slide navigation-->
            <div class="carousel_navWrap">
              <div class="dotWrap">
                <button class="current" data-count="1">1</button>
                <button data-count="2">2</button>
                <button data-count="3">3</button>
                <button data-count="4">4</button>
              </div>
            </div>
          </div>
        </div>
        <!--End single feature-->
      </section>
      <!--End feature section-->


      <!--Feature Split-->
      <section class="featureList">
        <!--Each split section is a "feature"-->
        <div class="featureWrap">
          <!--Text on one side-->
          <div class="featureText split">
            <!--Wrap text so it can be constrained separately from image-->
            <div class="textWrap">
              <div  class="bracketTop">
                <h3>Building Sustainability</h3>
              </div>
              <p>While dynamic glass provides significant advantages for architects and builders, the most tangible and human benefits of SageGlass products are felt in the everyday use of the spaces they surround.</p>
              <!--List of features-->
              <ul>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_eco_friendly.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Certified & Eco-Friendly</h4>
                    <p>By sustaining eco-friendly building interiors and conserving energy, SageGlass can help your project earn up to 38 LEED credits in five categories.</p>
                  </div>
                </li>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_efficiency.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Energy & Efficiency</h4>
                    <p>It takes less electricity to operate 2,000 square feet of SageGlass than it does to power a single 60-watt light bulb.</p>
                  </div>
                </li>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_savings.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Cost Savings</h4>
                    <p>Cost savings from SageGlass add up over a building’s life cycle, reducing overall energy loads by up to 20% and peak energy demand by up to 26%.</p>
                  </div>
                </li>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_durability.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Durability</h4>
                    <p>SageGlass has been tested across a range of harsh conditions, outperforming in durability tests by independent third-party organizations like the U.S. Department of Energy.</p>
                    <a href="#">Learn More</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!--Image (optional gallery) on the other-->
          <div class="featureImage split boxNav">
            <div class="carousel">
              <img class="slide current" data-count="1" src="img/product_feature1a.jpg" />
            </div>
            <!--Keep carousel at natural height despite absolute positioning-->
            <img class="sizer" src="img/product_feature1a.jpg" />
            <!--Slide navigation-->
          </div>
        </div>
        <!--End single feature-->
      </section>
      <!--End feature section-->


      <!--Feature Split-->
      <section class="featureList">
        <!--Each split section is a "feature"-->
        <div class="featureWrap">
          <!--Text on one side-->
          <div class="featureText split">
            <!--Wrap text so it can be constrained separately from image-->
            <div class="textWrap">
              <div  class="bracketTop">
                <h3>Designing Possibilities</h3>
              </div>
              <p>By questioning the role of glass at each stage of the engineering process, we’ve created a material that’s built for possibilities. With the flexibility to fit any design and the quality to earn its <a href="#">10-year limited warranty</a>, SageGlass is changing what glass means to architects.</p>
              <!--List of features-->
              <ul>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_shapes.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Shapes</h4>
                    <p>Our glass belongs outside the box—in addition to squares and rectangles, we offer trapezoid, parallelogram and triangle shapes to extend your design options.</p>
                    <a href="#">Link to Download</a>
                  </div>
                </li>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_sizes.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Sizes</h4>
                    <p>We’re always thinking big—that’s why we offer single rectangular panes as large as 5’ x 10’.</p>
                    <a href="#">Link to Download</a>
                  </div>
                </li>
                <li>
                  <div class="listIcon">
                    <img src="img/icon_colors.png" alt="" />
                  </div>
                  <div class="listText">
                    <h4>Colors</h4>
                    <p>We work with leading glass fabricators to provide you with unmatched color options, including clear, blue, green, gray and more.</p>
                    <a href="#">Link to Download</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!--Image (optional gallery) on the other-->
          <div class="featureImage split boxNav">
            <div class="carousel">
              <img class="slide current" data-count="1" src="img/product_feature1a.jpg" />
              <img class="slide" data-count="2" src="img/product_feature1a.jpg" />
              <img class="slide" data-count="3" src="img/product_feature1a.jpg" />
              <img class="slide" data-count="4" src="img/product_feature1a.jpg" />
            </div>
            <!--Keep carousel at natural height despite absolute positioning-->
            <img class="sizer" src="img/product_feature1a.jpg" />
            <!--Slide navigation-->
            <div class="carousel_navWrap">
              <button class="current" data-count="1">Shapes</button>
              <button data-count="2">Sizes</button>
              <button data-count="3">Colors</button>
              <button data-count="4">Durability</button>
            </div>
          </div>
        </div>
        <!--End single feature-->
      </section>
      <!--End feature section-->


      <!--Text Grid-->
      <!--<section class="textGrid center">
        <header>
          <div class="bracketTop">
            <h3>The Power of Choice</h3>
            <p>Every design project is different. So when it comes to powering the brilliant technology of SageGlass, we give you options so you can pick the method that best fits your needs.</p>
          </div>
        </header>
        <div class="textWrap">
          <div class="scaler">
            <div class="w5">
              <h4>Solar Power</h4>
              <p>The self-contained wireless version of SageGlass is solar-powered, making it ideal for retrofits and challenging applications like skylights, curtain walls and clerestory windows.</p>
              <a href="#">Link to Download</a>
            </div>
            <div class="w5">
              <h4>Center Bus Bar</h4>
              <p>The addition of a thin electrical conduit down the center of a pane of SageGlass enhances its functional benefits, providing faster tinting and greater tint uniformity across multiple panes.</p>
              <a href="#">Link to Download</a>
            </div>
          </div>
        </div>
        <img class="bottomImage" src="img/bottomPanel.jpg" alt="" />
      </section>-->

      <section class="textGrid sunburstSide headerSplit">
        <div class="scaler">
          <header>
            <div class="bracketTop">
              <h3>Product Differentiators</h3>
              <p>With its unique features and innovative technology, our dynamic glass is unlike any other electrochromic glass on the market.</p>
            </div>
          </header>
        </div>
        <div class="textWrap center">
          <div class="scaler">
            <div class="w3">
              <h4>LightZone™</h4>
              <p>SageGlass is the only dynamic glass that lets you create three unique tint zones within a single pane of glass.</p>
            </div>
            <div class="w3">
              <h4>Reflective Coatings</h4>
              <p>Exterior aesthetic is crucial to building design, and our special coatings create a more appealing reflective appearance, unlike the oily or filmy look of competitors’ glass.</p>
            </div>
            <div class="w3">
              <h4>Product Configurability</h4>
              <p>SageGlass is as versatile as it is dynamic—unlike our competitors’ products, you can easily and seamlessly mix and match it with pieces of ordinary glass to satisfy any architect’s design.</p>
            </div>
          </div>
        </div>
      </section>

      <!--Icon Grid-->
      <section class="iconGrid center">

        <!--Scaler makes sure content never goes above a certain width-->
        <div class="scaler">
          <!--bracketTop/bracketBottom controls if the black brackets appear-->
          <header class="bracketTop">
            <h3>See for yourself</h3>
            <p>Rework this subhead to talk less about learning about the general tech and more about how what you’ve just learned positively affects different environments.</p>
          </header>
          <!--For icons - they're not as wide as text, use icons class-->
          <div class="icons">
            <!--Anchors to the corresponding section on the same page-->
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/icon_education.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Higher Education</h4>
                <p>Daylit environments help students learn material faster.</p>
                <a href="#">Learn More</a>
              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/icon_healthcare.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Healthcare</h4>
                <p>Views of nature lead to improved recovery rates and well-being.</p>
                <a href="#">Learn More</a>
              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/icon_commercial.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Commercial Offices</h4>
                <p>Electrochromic glass saves money and improves productivity. </p>
                <a href="#">Learn More</a>
              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/icon_institution.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Cultural Institutions</h4>
                <p>Reducing heat and glare enhances the visitor experience. </p>
                <a href="#">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End icon grid section-->

      <section class="resourceGrid center">
        <header class="bracketTop">
          <h3>Building a Brighter Future</h3>
        </header>
        <div class="scaler">
          <a href="#" class="resourceBlock w3">
            <div class="hiddenBorder"></div>
            <div class="textWrap">
              <h4>Callout for an Innovation Feature</h4>
              <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo.</p>
              <span class="cta">Learn More</span>
            </div>
          </a>
          <a href="#" class="resourceBlock w3">
            <div class="hiddenBorder"></div>
            <div class="textWrap">
              <h4>Callout for an Innovation Feature</h4>
              <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo.</p>
              <span class="cta">Learn More</span>
            </div>
          </a>
          <a href="#" class="resourceBlock w3">
            <div class="hiddenBorder"></div>
            <div class="textWrap">
              <h4>Callout for an Innovation Feature</h4>
              <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo.</p>
              <span class="cta">Learn More</span>
            </div>
          </a>
          <a href="#" class="ctaBtn">See More Innovations</a>
        </div>
      </section>


      <!--Icon Grid-->
      <section class="iconGrid center">

        <!--Scaler makes sure content never goes above a certain width-->
        <div class="scaler">
          <!--bracketTop/bracketBottom controls if the black brackets appear-->
          <header class="bracketTop">
            <h3>Get In Touch</h3>
            <p>When you choose SageGlass for your project, you don’t just get a superior product—you get a partner to help make your ideas happen at every step of the process.</p>
          </header>
          <!--For icons - they're not as wide as text, use icons class-->
          <div class="icons">
            <!--Anchors to the corresponding section on the same page-->
            <div class="iconBox w2">
              <div class="iconImg">
                <img src="img/icon_1.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Design</h4>
                <p>We’ll help you incorporate dynamic glass into your project by helping you design framing systems, wire routing and control system configurations.</p>
              </div>
            </div>
            <div class="iconBox w2">
              <div class="iconImg">
                <img src="img/icon_2.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Performance Modeling</h4>
                <p>We can show you how much energy your project can save every year by using glass performance modeling that’s tailored to your project and climate.</p>
              </div>
            </div>
            <div class="iconBox w2">
              <div class="iconImg">
                <img src="img/icon_3.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Drawings</h4>
                <p>We’ll review your drawings and provide control system wiring diagrams and schematics, complete with final dimensions and all the materials you’ll need.</p>
              </div>
            </div>
            <div class="iconBox w2">
              <div class="iconImg">
                <img src="img/icon_4.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Installation</h4>
                <p>We want to make sure installation goes as smoothly as possible, so we provide relevant training for contractors and review installation details with window, skylight and curtain wall manufacturers.</p>
              </div>
            </div>
            <div class="iconBox w2">
              <div class="iconImg">
                <img src="img/icon_5.png" alt="" />
              </div>
              <div class="iconText">
                <h4>Support</h4>
                <p>Throughout the construction process and afterwards, we’re available with on-site training and telephone support to address any issues or questions that may arise.</p>
              </div>
            </div>
            <a href="#" class="ctaBtn">Contact Us</a>
          </div>
        </div>
      </section>
      <!--End icon grid section-->

		</div>
    <?php include 'footer.php'; ?>


    </body>
</html>
