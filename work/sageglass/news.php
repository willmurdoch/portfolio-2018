<!doctype html>
<html>
<head>
  <title>News &amp; Trends | SageGlass</title>
  <?php include 'head.php'; ?>
</head>
<body>
  <?php include 'scripts.php'; ?>

  <?php include 'header.php'; ?>

    <div id="sageWrap">

      <div id="popupOverlay">
        <div class="centerWrap">
          <div class="centerer">

          </div>
        </div>
      </div>

      <div id="newsletterForm" style="display:none;">
        <div class="closeBtn" style="padding-bottom:15px;width:25%;"><p>x</p></div>
        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" style="display:block; z-index:100; background-color: #e7e7e7; padding: 60px 20px; width:400px; margin-left:auto; margin-right:auto; border-top:6px solid #ffd503; border-bottom:6px solid #ffd503; text-align:center;">
          <input type=hidden name="oid" value="00DA0000000J0Y7">
          <input type=hidden name="retURL" value="http://">
          <label for="first_name"><strong>FIRST NAME</strong></label><br><input style="border:1px solid; padding:0.5rem;" id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br><br>
          <label for="last_name"><strong>LAST NAME</strong></label><br><input style="border:1px solid; padding:0.5rem;" id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br><br>
          <label for="company"><strong>COMPANY</strong></label><br><input style="border:1px solid; padding:0.5rem;" id="company" maxlength="40" name="company" size="20" type="text" /><br><br>
          <label for="email"><strong>EMAIL</strong></label><br><input style="border:1px solid; padding:0.5rem;" id="email" maxlength="80" name="email" size="20" type="text" /><br><br>
          <input type="submit" name="submit" style="background-color:#ffd503; font-weight:bold; border: 1px solid #ffd503; padding:10px 20px;">
        </form>
      </div>

      <section class="hero static">
				<div class="centerWrap">
					<div class="centerer">
						<div class="headline center">
							<h2>NEWS &amp; TRENDS</h2>

              <div class="container headline-links" style="display:block;">
                <div class="w5">
                  <p class="news-headers">MEDIA CONTACT:</p>
                  <a href="mailto:sageglass@brownsteingroup.com" class="nh-message">sageglass@brownsteingroup.com</a>
                  <a href="#" class="ctaBtn white">DOWNLOAD THE MEDIA KIT</a>
                </div>

                <div class="w5">
                  <p class="news-headers">STAY UP-TO-DATE:</p>
                  <p class="nh-message">Receive news updates and announcements</p>
                  <a href="#" data-popup="#newsletterForm" class="ctaBtn white">SIGN UP FOR NEWS UPDATES</a>
                </div>
              </div>

						</div>
					</div>
				</div>
			</section>

      <section class="news-trend center">
        <div class="vBorder">
					<img src="img/vBorder.png" alt="" />
				</div>
        <header class="filterBlock">
          <p class="bracketTop">FILTER BY NEWS TYPE:</p>
          <div class="filterWrap">
            <a class="current" href="#all">All</a>
            <a href="#blogPosts">Blog Posts</a>
            <a href="#recPress">Recent Press</a>
            <a href="#whitePapers">White Papers</a>
            <a href="#announce">Announcements</a>
            <a href="#socMedia">Social Media</a>
          </div>
        </header>

        <div class="resourceWrap tileGrid">
          <div class="scaler">
            <a href="post.php" class="resourceBlock w3 socMedia">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
				        <span class="date">Feb. 18, 2016</span>
                <h4>Important New Discovery</h4>
                <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo.</p>
                <span class="cta">Learn More</span>
              </div>
            </a>

            <a href="post.php" class="resourceBlock image w3 blogPosts">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/placeholder_videoThumb.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>

            <a href="post.php" class="resourceBlock image w3 recPress">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/finger.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 blogPosts">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/mac.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 whitePapers">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/human.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 whitePapers">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/business-card.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock w3 recPress">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
				        <span class="date">Feb. 18, 2016</span>
                <h4>Important Event Impacts Millions</h4>
                <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo.</p>
                <span class="cta">Learn More</span>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 blogPosts">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/social.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 announce">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/logo.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 announce">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/lines.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 announce">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/linkedin.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock w3 blogPosts">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <span class="date">Feb. 24, 2016</span>
                <h4>Someone Just Published A New Article</h4>
                <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo.</p>
                <span class="cta">Learn More</span>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 socMedia">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/ford-mustang.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 whitePapers">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/vault.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 whitePapers">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/top-view.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock w3 announce">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <span class="date">Feb. 24, 2016</span>
                <h4>Callout for an Innovation Feature</h4>
                <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo.</p>
                <span class="cta">Learn More</span>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 socMedia">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/icon.png" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 socMedia">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/vw.jpg" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
            <a href="post.php" class="resourceBlock image w3 socMedia">
              <div class="hiddenBorder"></div>
              <div class="textWrap">
                <div class="imgWrap postWrap">
                  <img src="img/logos/hand.png" alt="" />
                </div>
                <span class="date">Feb. 24, 2016</span>
                <h4>News item title here</h4>
              </div>
            </a>
          </div>
        </div>

      </section>

    </div>

  <?php include 'footer.php'; ?>
</body>
</html>
