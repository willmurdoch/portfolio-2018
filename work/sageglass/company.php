<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>Products | SageGlass</title>
		<?php include 'head.php'; ?>
    </head>
    <body>
		<?php include 'scripts.php'; ?>

    <!--[if lt IE 8]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include 'header.php'; ?>

		<div id="sageWrap" class="plainTextPage">

			<!--Header-->
			<section class="hero lightShift">
				<div class="centerWrap">
					<div class="centerer">
						<div class="headline">
							<h2>A LOOK INSIDE</h2>
						</div>
					</div>
				</div>
				<div class="imageFader">
					<div class="slide current" data-count="1" style="background-image:url('img/product_slide1.jpg');">
            <video preload autoplay loop>
              <source src="video/company.mp4" type="video/mp4">
            </video>
          </div>
				</div>
			</section>

			<!--Section Headline-->
			<section class="productHeadline center">
				<div class="vBorder">
					<img src="img/vBorder.png" alt="" />
				</div>
        <div class="scaler">
          <header class="bracketTop">
  					<h2>Who We Are</h2>
  					<p>With over 500 patents and manufactured in the world’s most advanced electrochromic plant, SageGlass makes one product: the world’s most intelligent, reliable electrochromic glass that is as dynamic as the people it benefits.</p>
  				</header>
				</div>
			</section>
      <section style="display:none;" class="featureList"></section>

      <!--Feature Split-->
      <section class="featureList">
        <!--Each split section is a "feature"-->
        <div class="featureWrap">
          <!--Text on one side-->
          <div class="featureText split">
            <!--Wrap text so it can be constrained separately from image-->
            <div class="textWrap">
              <div  class="bracketTop">
                <h3>Why We're Here</h3>
              </div>
              <p>Our company started in 1989 in Valley Cottage, N.Y., with a singular and ambitious mission: to completely reinvent what glass means for buildings. We soon became the first to develop electrochromic technology and spent the years that followed innovating and building upon our revolutionary product.</p>
              <!--List of features-->
              <p>In 2010, we announced our triple-pane glazing product, the world’s most energy-efficient window glass, and this led us to an important partnership. Saint-Gobain, the Paris-based world leader in building materials for 350 years, invested $80 million in our company. By 2012, Saint-Gobain had acquired 100% of SageGlass, making it a wholly owned subsidiary and a key part of its innovation strategy. </p>
            </div>
          </div>
          <!--Image (optional gallery) on the other-->
          <div class="featureImage split boxNav">
            <div class="carousel">
              <img class="slide current" data-count="1" src="img/about1.jpg" />
            </div>
            <!--Keep carousel at natural height despite absolute positioning-->
            <img class="sizer" src="img/about1.jpg" />
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
                <h3>Where We're Going</h3>
              </div>
              <p>Today, we’re proud to own and operate the largest and most advanced electrochromic glass plant on the globe. Since the first construction project using SageGlass, we have installed electrochromic glass in <a href="portfolio.php">700 projects and iconic buildings</a> worldwide.</p>
              <p>Every day, our perseverance pays off in small ways that give the world more beautiful energy-efficient, occupant-centric buildings. We invite you to become part of our story.</p>
            </div>
          </div>
          <!--Image (optional gallery) on the other-->
          <div class="featureImage split tintNav">
            <div class="carousel">
              <img class="slide current" data-count="1" src="img/about2.jpg" />
            </div>
            <!--Keep carousel at natural height despite absolute positioning-->
            <img class="sizer" src="img/about2.jpg" />
          </div>
        </div>
        <!--End single feature-->
      </section>
      <!--End feature section-->



      <!--Icon Grid-->
      <section class="iconGrid employees center gray">
        <!--<div class="employeeBlock sunburst">
          <div class="scaler">
            <div class="closeBtn">Close <span>x</span></div>
            <div class="headshot">
              <img src="" alt="" />
              <div class="employeeBlurb">
                <h4></h4>
                <h5></h5>
                <p></p>
              </div>
            </div>
          </div>
        </div>-->
        <!--Scaler makes sure content never goes above a certain width-->
        <div class="employeeWrap">

            <div class="scaler">
                <!--bracketTop/bracketBottom controls if the black brackets appear-->
                <header class="bracketTop">
                  <h3>A Shared Perspective</h3>
                  <p>The SageGlass team is a group of thinkers, designers and innovators out to change the way people think about glass. Get to know our team below.</p>
                </header>
            </div>

            <div class="employeeBlock sunburst">
              <div class="scaler sunburst-scaler">
                <div class="closeBtn">Close <span>x</span></div>
                <div class="headshot">
                  <img class="w3" src="" alt="" />
                  <div class="employeeBlurb w6">
                    <h4></h4>
                    <h5></h5>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>

          <div class="scaler empl-scaler">
            <!--bracketTop/bracketBottom controls if the black brackets appear
            <header class="bracketTop">
              <h3>A Shared Perspective</h3>
              <p>The SageGlass team is a group of thinkers, designers and innovators out to change the way people think about glass. Get to know our team below.</p>
            </header>-->
            <!--For icons - they're not as wide as text, use icons class-->
            <div class="icons">
              <!--Anchors to the corresponding section on the same page-->
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec neque quam. Mauris ac pellentesque tellus. In dictum volutpat augue, vel molestie arcu lobortis vitae. In aliquet tristique libero quis scelerisque. Mauris imperdiet mauris vitae lectus sollicitudin tincidunt. Donec auctor risus sit amet turpis condimentum malesuada. Phasellus ut efficitur augue, et aliquet eros. Ut tincidunt dui sem, sit amet sagittis leo fermentum a. Etiam facilisis eget nibh a finibus. Quisque consequat auctor dignissim. Maecenas faucibus nibh sed nulla pulvinar aliquet. Nulla iaculis et quam sed venenatis. Etiam et massa quis felis rutrum sollicitudin.</span>
                </div>
              </a>
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan2, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Donec pharetra sapien nec sem rhoncus scelerisque. Curabitur vitae dui nisl. Cras faucibus aliquet sagittis. Donec auctor nisl ullamcorper est consectetur, at convallis purus fermentum.</span>
                </div>
              </a>
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan3, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Donec pharetra sapien nec sem rhoncus scelerisque. Curabitur vitae dui nisl. Cras faucibus aliquet sagittis. Donec auctor nisl ullamcorper est consectetur, at convallis purus fermentum.</span>
                </div>
              </a>
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan4, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Donec pharetra sapien nec sem rhoncus scelerisque. Curabitur vitae dui nisl. Cras faucibus aliquet sagittis. Donec auctor nisl ullamcorper est consectetur, at convallis purus fermentum.</span>
                </div>
              </a>
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan5, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Donec pharetra sapien nec sem rhoncus scelerisque. Curabitur vitae dui nisl. Cras faucibus aliquet sagittis. Donec auctor nisl ullamcorper est consectetur, at convallis purus fermentum.</span>
                </div>
              </a>
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan6, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Curabitur et elit pretium, faucibus tortor sed, ornare odio.</span>
                </div>
              </a>
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan7, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec dui et justo elementum mollis eu eget lorem. Pellentesque suscipit ante scelerisque erat maximus, et pellentesque nibh volutpat.</span>
                </div>
              </a>
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan8, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Aliquam accumsan libero auctor ante maximus, eu ultrices felis iaculis. Etiam molestie justo arcu, at finibus lacus consectetur sed.</span>
                </div>
              </a>
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan9, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Suspendisse ullamcorper dui sit amet eleifend tristique. Donec pharetra sapien nec sem rhoncus scelerisque</span>
                </div>
              </a>
              <a href="#" class="iconBox w2">
                <div class="iconImg">
                  <img src="img/headshot.png" alt="" />
                </div>
                <div class="iconText">
                  <h4>Alan McLenaghan10, PHD</h4>
                  <p>Vice President, R&D and Product Development</p>
                  <span class="hiddenBlurb">Curabitur vitae dui nisl. Cras faucibus aliquet sagittis. Donec auctor nisl ullamcorper est consectetur, at convallis purus fermentum.</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!--End icon grid section-->


      <!--Icon Grid-->
      <section class="iconGrid center">

        <!--Scaler makes sure content never goes above a certain width-->
        <div class="scaler">
          <!--bracketTop/bracketBottom controls if the black brackets appear-->
          <header class="bracketTop">
            <h3>Our Partners</h3>
            <p>We're in good company.</p>
          </header>
          <!--For icons - they're not as wide as text, use icons class-->
          <div class="icons">
            <!--Anchors to the corresponding section on the same page-->
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/deamor.png" alt="" />
              </div>
              <div class="iconText">

              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/tubelite.png" alt="" />
              </div>
              <div class="iconText">

              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/ykkap.png" alt="" />
              </div>
              <div class="iconText">

              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/viracon.png" alt="" />
              </div>
              <div class="iconText">

              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/linel.png" alt="" />
              </div>
              <div class="iconText">

              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/supersky.png" alt="" />
              </div>
              <div class="iconText">

              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/lutron.png" alt="" />
              </div>
              <div class="iconText">

              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/schneider.png" alt="" />
              </div>
              <div class="iconText">
              </div>
            </div>
          </div>
          <a href="#" class="ctaBtn">See All Our Partners</a>
        </div>
      </section>

      <!--Icon Grid-->
      <section class="iconGrid center gray">

        <!--Scaler makes sure content never goes above a certain width-->
        <div class="scaler">
          <!--bracketTop/bracketBottom controls if the black brackets appear-->
          <header class="bracketTop">
            <h3>Our Awards</h3>
            <p>SageGlass is truly the world leader in electrochromic glass, and we've got the recognition to prove it.</p>
          </header>
          <!--For icons - they're not as wide as text, use icons class-->
          <div class="icons">
            <!--Anchors to the corresponding section on the same page-->
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/snappys.png" alt="" />
              </div>
              <div class="iconText">
              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/solar.png" alt="" />
              </div>
              <div class="iconText">
              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/bloomberg.png" alt="" />
              </div>
              <div class="iconText">
              </div>
            </div>
            <div class="iconBox w25">
              <div class="iconImg">
                <img src="img/pia.png" alt="" />
              </div>
              <div class="iconText">
              </div>
            </div>
          </div>
          <a href="#" class="ctaBtn">See All Our Awards</a>
        </div>
      </section>

      <section class="resourceGrid white center">
        <header class="bracketTop">
          <h3>Events</h3>
        </header>
        <div class="scaler">
          <a href="#" class="resourceBlock event w3">
            <div class="hiddenBorder"></div>
            <div class="textWrap">
              <div class="dateWrap">
                <p class="month">April</p>
                <p class="day">17</p>
                <h4>Event Title Here</h4>
              </div>
              <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus.</p>
              <span class="cta">More Details</span>
            </div>
          </a>
          <a href="#" class="resourceBlock event w3">
            <div class="hiddenBorder"></div>
            <div class="textWrap">
              <div class="dateWrap">
                <p class="month">April</p>
                <p class="day">17</p>
                <h4>Event Title Here</h4>
              </div>
              <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus.</p>
              <span class="cta">More Details</span>
            </div>
          </a>
          <a href="#" class="resourceBlock event w3">
            <div class="hiddenBorder"></div>
            <div class="textWrap">
              <div class="dateWrap">
                <p class="month">April</p>
                <p class="day">17</p>
                <h4>Event Title Here</h4>
              </div>
              <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus.</p>
              <span class="cta">More Details</span>
            </div>
          </a>
          <a href="#" class="ctaBtn">See All Events</a>
        </div>
      </section>

      <section class="faqBlock gray">
        <div class="scaler center">
          <header class="bracketTop">
            <h3>FAQ</h3>
          </header>
        </div>
        <div class="scaler">
          <ul>
            <li>
              <div class="question"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div>
              <div class="answer"><div class="answerText"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div></div>
            </li>
            <li>
              <div class="question"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div>
              <div class="answer"><div class="answerText"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div></div>
            </li>
            <li>
              <div class="question"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div>
              <div class="answer"><div class="answerText"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis? Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div></div>
            </li>
            <li>
              <div class="question"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div>
              <div class="answer"><div class="answerText"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div></div>
            </li>
            <li>
              <div class="question"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div>
              <div class="answer"><div class="answerText"><p>Lorem ipsum dolor sit amet, consectetur vivamus luctus urna sed urna ultricies ac tempor dui sagittis?</p></div></div>
            </li>
          </ul>
          <a href="#" class="ctaBtn">See the Full FAQ</a>
        </div>
      </section>

      <section class="careers">
        <div class="scaler center">
          <header class="bracketTop">
              <h3>Join Our Team</h3>
              <p>See how you could help shape the future of dynamic glass.</p>
          </header>
          <table class="careersList">
            <tr>
              <th>
                <h4>POSITION</h4>
              </th>
              <th>
                <h4>LOCATION</h4>
              </th>
              <th>
                <h4>DATE LISTED</h4>
              </th>
            </tr>
            <tr>
              <td>
                <a href="#">Open position title here</a>
              </td>
              <td>
                <p>Boston, MA</p>
              </td>
              <td>
                <p>2/28/2016</p>
              </td>
            </tr>
            <tr>
              <td>
                <a href="#">Open position title here</a>
              </td>
              <td>
                <p>Boston, MA</p>
              </td>
              <td>
                <p>2/28/2016</p>
              </td>
            </tr>
            <tr>
              <td>
                <a href="#">Open position title here</a>
              </td>
              <td>
                <p>Boston, MA</p>
              </td>
              <td>
                <p>2/28/2016</p>
              </td>
            </tr>
            <tr>
              <td>
                <a href="#">Open position title here</a>
              </td>
              <td>
                <p>Boston, MA</p>
              </td>
              <td>
                <p>2/28/2016</p>
              </td>
            </tr>
          </table>
        </div>
        <div class="cta_btnWrap">
          <a href="#">Explore Careers at SageGlass</a>
        </div>
      </section>

		</div>
    <?php include 'footer.php'; ?>


    </body>
</html>
