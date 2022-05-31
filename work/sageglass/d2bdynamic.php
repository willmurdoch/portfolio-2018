<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>Project Title | SageGlass</title>
		<?php include 'head.php'; ?>
    </head>
    <body>
		<?php include 'scripts.php'; ?>

    <!--[if lt IE 8]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include 'header.php'; ?>

		<div id="sageWrap">
      <div class="wrapper">
        <div class="block block-system">
          <div class="content">
            <div class="plainTextPage">

              <section class="hero lightShift">
                <div class="centerWrap" style="margin-top: 25px;">
                    <div class="centerer">
                        <div class="headline">
                            <h2>Dare to be Dynamic</h2>
                        </div>
                    </div>
                </div>
                <div class="imageFader" style="margin-top: 50px;">
                  <div class="slide current" data-count="1" style="background-image:url('https://www.sageglass.com/sites/default/files/single_image_headline/daredynamic_header.jpg');"></div>
                </div>
              </section>

              <!--Basic Page Content Area -->
              <section class="productHeadline center">
                  <div class="vBorder">
                      <img src="/sites/all/themes/sage/img/vBorder.png" alt="">
                  </div>
                  <div class="scaler">
                    <header class="bracketTop">
                      <h2 class="animIn">Dare to be Dynamic</h2>
                    </header>
                  </div>
              </section>

              <section class="plainTextWrap">
                <div class="scaler">
                  <div class="plainText">
                    <div class="dynamicSlide questionList">
                      <h5>SageGlass</h5>
                      <h6>Dynamic Challenge</h6>
                      <p>Answer these three questions and be entered to win a trip to LA to see the iconic SageGlass installation at 71Above.</p>
                      <div class="question-wrap">
                        <div class="question current">
                          <div class="qLabel">1</div>
                          <p>In its darkest state, SageGlass can block out ______ of glare-producing light?</p>
                          <label><input type="radio" name="q1" value="wrong"><div class="radioBtn">75%</div></label>
                          <label><input type="radio" name="q1" value="wrong"><div class="radioBtn">82%</div></label>
                          <label><input type="radio" name="q1" value="right"><div class="radioBtn">99%</div></label>
                          <div class="nextSlide">
                            <p class="answer">SageGlass can darken to 1% visible light transmission. This level of tinting blocks out 99% of glare-producing light, providing the ability to darken the space while still maintaining outdoor views.</p>
                            <button class="ctaBtn next">Next</button>
                          </div>
                        </div>
                        <div class="question">
                          <div class="qLabel">2</div>
                          <p>What is the largest available size of SageGlass?</p>
                          <label><input type="radio" name="q2" value="wrong"> <div class="radioBtn">4' x 9'</div></label>
                          <label><input type="radio" name="q2" value="right"> <div class="radioBtn">5' x 10'</div></label>
                          <label><input type="radio" name="q2" value="wrong"> <div class="radioBtn">8' x 12'</div></label>
                          <div class="nextSlide">
                            <p class="answer">SageGlass can produce rectangular panes up to 5’ x 10’. We also provide dynamic glass in triangles, trapezoids and parallelograms, as well as a variety of colors, to enable design freedom and creativity.</p>
                            <span><button class="ctaBtn prev">back</button></span>
                            <span><button class="ctaBtn next">Next</button></span>
                          </div>
                        </div>
                        <div class="question">
                          <div class="qLabel">3</div>
                          <p>How many LEED v4 credits can SageGlass windows and skylights help you achieve? </p>
                          <label><input type="radio" name="q3" value="wrong"><div class="radioBtn">2</div></label>
                          <label><input type="radio" name="q3" value="wrong"><div class="radioBtn">5</div></label>
                          <label><input type="radio" name="q3" value="right"><div class="radioBtn">8</div></label>
                          <div class="nextSlide end">
                            <p class="answer">SageGlass can help your project earn LEED v4 credits in the following categories: Indoor Environmental Quality; Materials and Resources; Innovation; Sustainable Sites; Energy and Atmosphere.</p>
                            <span><button class="ctaBtn prev">back</button></span>
                            <span><button class="ctaBtn next">Next</button></span>
                          </div>
                        </div>
                        <div class="question formSlide">
                          <form class="contactForm" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
                            <input type=hidden name="oid" value="00DA0000000J0Y7">
                            <input type=hidden name="retURL" value="https://www.sageglass.com/dynamic">
                            <fieldset class="split">
                              <label>First Name</label>
                              <input id="00N1600000EtwXS" name="00N1600000EtwXS" type="text" required>
                            </fieldset>
                            <fieldset class="split right">
                              <label>Last Name</label>
                              <input id="00N1600000EtwXX" name="00N1600000EtwXX" type="text" required>
                            </fieldset>
                            <fieldset class="split">
                              <label>Firm/Company Name:</label>
                              <input id="00N1600000EtwXc" name="00N1600000EtwXc" type="text" required>
                            </fieldset>
                            <fieldset class="split right">
                              <label>Email:</label>
                              <input id="00N1600000EtwXh" name="00N1600000EtwXh" type="email" required>
                            </fieldset>
                            <fieldset class="checkbox">
                              <label class="large">Do you have a current project? <input id="00N1600000EtwXm" name="00N1600000EtwXm" type="checkbox" value="1" /></label>
                            </fieldset>
                            <fieldset>
                              <label class="large">What specific questions do you have about dynamic glass?</label>
                              <textarea id="00N1600000EtwXw" name="00N1600000EtwXw" rows="3" type="text" wrap="soft" required></textarea>
                            </fieldset>
                            <input class="ctaBtn" type="submit" name="submit">
                          </form>
                        </div>
                      </div>
                    </div>

                  <style>
                  .bracketTop, .hero .headline h2 {
                  	display: none;
                  }
                  .contactForm fieldset.checkbox{
                    float: left;
                    margin-top: 1rem;
                  }
                  .checkbox input[type="checkbox"]{
                    margin-left: 0.5rem;
                  }
                  .questionList .contactForm h5{
                    font-size: 1.5rem;
                    text-transform: none;
                    text-align: center;
                    display: block;
                    float: left;
                    width: 100%;
                    margin: 2rem auto 2rem;
                  }

                  .hero:before {
                  	content: '';
                  	position: absolute;
                  	width: 90%;
                  	height: calc(98% - 120px);
                  	top: 120px;
                  	left: 5%;
                  	background-image: url(https://www.sageglass.com/sites/default/files/daredynamic_text.png);
                  	background-size: contain;
                  	background-position: center;
                  	background-repeat: no-repeat;
                  	opacity: 0.75;
                    filter: saturate(150%);
                  	z-index: 5;
                  }

                  @media (max-width: 1023px) {
                  	.hero:before {
                  		top: 10%;
                  		height: 80%;
                  	}
                  }

                  form h4 {
                  	display: none;
                  }

                  fieldset.questions {
                  	display: block;
                  	border-top: 1px solid #CCC;
                  	padding: 3rem 0 2rem;
                  	width: 100%;
                  	text-align: center;
                  	margin: 2rem auto;
                  }
                  fieldset.questions input[type="radio"] {
                  	width: 0;
                  	height: 0;
                    opacity: 0;
                    position: absolute;
                  }
                  fieldset.questions label {
                  	width: auto;
                  	display: inline-block;
                  }
                  fieldset.questions label:not(.large) {
                  	margin-bottom: 0;
                  }
                  fieldset.questions label.large {
                  	width: 100%;
                  	max-width: 650px;
                  	margin: 0 auto 1rem;
                  	font-size: 1.5rem;
                  	display: block;
                  }
                  .nextSlide {
                  	display: none;
                  }
                  .question-wrap {
                  	position: relative;
                  	width: 100%;
                  	overflow: hidden;
                  	margin-bottom: 4rem;
                  }
                  .questionList {
                  	text-align: center;
                  	position: relative;
                  }
                  .questionList p {
                  	font-size: 1.2rem;
                  	max-width: 600px;
                  	margin: 1rem auto!important;
                  }
                  .questionList h5, .questionList h6 {
                  	text-transform: uppercase;
                  	margin: 0;
                  }
                  .questionList h5 {
                  	font-size: 2.5rem;
                  }
                  .questionList h6 {
                  	font-size: 2.5rem;
                  	font-weight: 500;
                  }
                  .questionList .question {
                  	text-align: center;
                  	margin: 3rem auto 4rem;
                  	width: 100%;
                  	position: absolute;
                  	top: 0;
                  	left: 100vw;
                    -webkit-transform: translate3d(0, 0, 0);
                    -webkit-backface-visibility: hidden;
                    -webkit-perspective: 1000;
                  }
                  .questionList .question .qLabel {
                  	width: 3rem;
                  }
                  .questionList .question label {
                  	display: inline-block;
                  }
                  .questionList .question input[type="radio"] {
                  	width: 0;
                  	height: 0;
                    opacity: 0;
                    position: absolute;
                  }
                  .questionList .question p {
                  	font-size: 2rem;
                  	line-height: 1em;
                  	margin: 1rem auto 2rem!important;
                  	font-weight: 600;
                  }
                  .questionList .question p.answer {
                  	font-size: 1.2rem;
                  	font-weight: 500;
                  	margin: 2rem auto 2rem!important;
                  	font-style: italic;
                  }
                  .questionList .question.current {
                  	position: relative;
                  	left: 0;
                  }
                  .questionList .question.answered input ~ .radioBtn {
                  	pointer-events: none;
                  }
                  .questionList .question.answered input[value="wrong"]:checked ~ .radioBtn {
                  	background: #CCC;
                  	border-color: red;
                  }
                  .questionList .question.answered input[value="right"] ~ .radioBtn {
                  	background: #ffd503;
                    border-color: green;
                  }
                  .questionList .ctaBtn {
                  	display: table;
                  	margin-top: 0;
                  }
                  .questionList span{
                    display: inline-block;
                  }
                  .questionList .answer span{
                    display: block;
                    width: 100%;
                    text-align: center;
                    font-weight: 600;
                    margin-bottom: 0.5rem;
                  }
                  .questionList .answer span.right{
                    color: green;
                  }
                  .questionList .answer span.wrong{
                    color: red;
                  }
                  .questionList .contactForm {
                  	text-align: left;
                  	width: 95%;
                  	margin-left: 2.5%;
                  	padding-bottom: 0;
                  }
                  .questionList .contactForm input[type="submit"] {
                  	border: 0;
                  	outline: 0;
                  }
                  .questionList .contactForm input[type="radio"] ~ .radioBtn {
                  	pointer-events: initial;
                  }
                  .radioBtn, .qLabel {
                  	font-size: 1.5rem;
                  	white-space: nowrap;
                  	width: 5rem;
                  	height: 3rem;
                  	padding: 0 0.5rem;
                  	display: inline-block;
                  	text-align: center;
                  	line-height: 3rem;
                  	border: 3px solid #ffd503;
                  	color: #000;
                  	transition: background 0.2s ease-out, color 0.2s ease-out, border-color 0.2s ease-out;
                  }
                  .radioBtn {
                  	cursor: pointer;
                  }
                  .radioBtn:hover {
                  	background: #3b393a;
                  	color: #ffd503;
                  	border-color: #3b393a;
                  }
                  .qLabel {
                  	background: #ffd503;
                  	color: #000;
                  }
                  input:checked ~ .radioBtn {
                  	background: #ffd503;
                  	border-color: #ffd503;
                  	color: #000;
                  }
                  </style>
                  <script>
                    jQuery('.question input[type="radio"]').click(function(){
                      jQuery('.question.current').addClass('answered');
                      if(jQuery(this).val() == 'right') jQuery('.question.current .answer').prepend('<span class="right">Correct</span>');
                      else jQuery('.question.current .answer').prepend('<span class="wrong">Incorrect</span>');
                      jQuery('.question.current input[type="radio"]').off('click');
                      jQuery('.question.current .nextSlide').slideDown(500);
                    });
                    jQuery('.nextSlide .ctaBtn.next').click(function(e){
                      e.preventDefault();
                      var nextHeight = jQuery('.question.current').next('.question').outerHeight(true);
                      jQuery('.question-wrap').animate({
                        'height': nextHeight
                      }, 500);
                      jQuery('.question.current').animate({
                        'left':'-100vw'
                      }, 500);
                      jQuery('.question.current').next('.question').css('left', '100v').animate({
                        'left': '0'
                      }, 500, function(){
                        jQuery('.question.current').removeClass('current').next('.question').addClass('current');
                        jQuery('.question-wrap').removeAttr('style');
                      });
                    });
                    jQuery('.nextSlide .ctaBtn.prev').click(function(e){
                      e.preventDefault();
                      var prevHeight = jQuery('.question.current').prev('.question').outerHeight(true);
                      jQuery('.question-wrap').animate({
                        'height': prevHeight
                      }, 500);
                      jQuery('.question.current').animate({
                        'left':'100vw'
                      }, 500);
                      jQuery('.question.current').prev('.question').css('left', '-100vw').animate({
                        'left': '0'
                      }, 500, function(){
                        jQuery('.question.current').removeClass('current').prev('.question').addClass('current');
                        jQuery('.question-wrap').removeAttr('style');
                      });

                    });
                  </script>
                </div>
              </div>
            </section>

            <section style="display:none;" class="featureList"></section>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>

  </body>
</html>
