var tileGrid, thisScroll, lastScroll;

jQuery(document).ready(function(){

	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);

	msieversion();
	/*if(jQuery('.hero').length){
		heroBindings();
	}*/

	jQuery('.scrollFadeWrap ~ .resourceGrid a.w3').each(function(){
		var myUrl = jQuery(this).attr('href');
		var myLang = jQuery('.language-switcher-locale-url li.active a').attr('href');
		var myElem = jQuery(this);
		if(myLang != '/'){
			myElem.attr('href', myLang+'/'+myUrl);
		}
	});

	jQuery(window).on('scroll', function(){
		if(jQuery(window).scrollTop() > 10){
			jQuery('body').addClass('scrolled');
		}
		else{
			jQuery('body').removeClass('scrolled');
		}
		lastScroll = thisScroll;
	});
  if(jQuery('.plainTextPage').length){
    var video = document.querySelector('.imageFader .slide:first-of-type video');
    setTimeout(function(){
      if ( video.readyState === 4 ) {
        jQuery('.slide').first().find('video')[0].play();
        sliderTime = 5500;
      }
      else{
        jQuery('.slide video').remove();
      }
    },5000);
  }
	var lightzoneIndex = 0;
	jQuery('.page-commercial .hero button').each(function(){
		lightzoneIndex++;
		jQuery(this).html('<p>'+lightzoneIndex+'</p>');
	});
	if(window.location.hash && jQuery('.filterWrap').length){
		var initialFilter = window.location.hash;
		if('.filterWrap a[href="#'+initialFilter+'"]') jQuery(this).trigger('click');
	}

	if(jQuery('.language-switcher-locale-url').length){
		jQuery('.langPicker ul, li.languages ul').html(jQuery('.language-switcher-locale-url').html());
		var myLang = jQuery('.language-switcher-locale-url li.active').attr('class').split(' ')[0];
		jQuery('.langPicker p span').html(myLang);
	}
	if((!jQuery('html').hasClass('touchevents')) && (!jQuery('html').hasClass('touch'))){
		//dropdowns();
	}
	else{
		jQuery('.slide video').remove();
	}
	if(jQuery('.scrollFadeWrap').length){
		homeBindings();
	}
	if(jQuery('.hero .slideNav').length){
		heroCarousel();
	}
	if(jQuery('.featureImage').length){
		featureCarousel();
	}
	if(jQuery('.quoteSlider').length){
		if(!jQuery(this).find('.slide')){
			jQuery(this).hide();
		}
		quoteCarousel();
	}
	if (jQuery('.employees').length) {
    jQuery('.employees .iconBox').click(function (e) {
        e.preventDefault();
        var myEmployee = jQuery(this);
		jQuery('.employeeWrap .icons').slideUp(500);
        jQuery('.employeeBlock img').attr('src', myEmployee.find('img').attr('src'));
        jQuery('.employeeBlock h4').html(myEmployee.find('h4').html());
        jQuery('.employeeBlock h5').html(myEmployee.find('p').html());
		jQuery('.employeeBlock p').html(myEmployee.find('.hiddenBlurb').html());
		jQuery('.employeeBlock').slideDown(500);
    });
    jQuery('.employeeBlock .closeBtn').click(function (e) {
        jQuery(this).parent().parent().slideUp(500);
        jQuery('.employeeWrap .icons').slideDown(500);
    });
  }
	jQuery('.mobileNav .nice-menu .nice-menu > li').unwrap();
	jQuery('.mobileBtn').click(function(e){
		e.preventDefault();
		if(jQuery('.mobileNav').hasClass('open')){
			jQuery('.mobileNav').removeClass('open');
			jQuery(this).removeClass('open');
		}
		else{
			jQuery('.mobileNav').addClass('open');
			jQuery(this).addClass('open');
		}
	});
	jQuery('.mobileNav .menuparent > a, .mobileNav .menuparent > span').click(function(e){
		e.preventDefault();
		if(!jQuery(this).parent().hasClass('expanded')){
			jQuery(this).siblings('ul').css('max-height','20rem').parent().addClass('expanded');
		}
		else{
			jQuery(this).siblings('ul').css('max-height','0').parent().removeClass('expanded');
		}
	});
	jQuery('.desktopNav .top.menuparent,.desktopNav .navBtn.menuparent, .langPicker').hover(function(){
		jQuery('.darkener').addClass('active');
	},function(){
		jQuery('.darkener').removeClass('active');
	});

	if(jQuery('.hero.static .textWrap h2').text().length > 75){
		jQuery('.hero.static .textWrap h2').css('font-size','3rem');
	}

	jQuery('.filterWrap a').click(function(e){
		e.preventDefault();
		jQuery(this).siblings().removeClass('current');
		jQuery(this).addClass('current');
		var myFilter = '.' + jQuery(this).attr('href').split('#')[1];
		if(myFilter == '.all') myFilter = '*';
		tileGrid.isotope({
			filter: myFilter
		});
	});

	if(jQuery('.faqBlock').length){
		jQuery('.faqBlock .question').click(function(){
			var myAnswer = jQuery(this).siblings('.answer');
			myAnswer.parents('li').siblings().removeClass('opened');
			myAnswer.parents('ul').find('.answer').removeAttr('style');
			if(myAnswer.css('max-height') != '0px'){
				myAnswer.parents('li').removeClass('opened');
				myAnswer.removeAttr('style');
			}
			else{
				myAnswer.parents('li').addClass('opened');
				myAnswer.css('max-height',myAnswer.find('.answerText').outerHeight(true));
			}
		});
	}



	if(jQuery('.repPicker').length){
		var myRepPicker = jQuery('.repPicker')[0].outerHTML;
		jQuery('.repPicker').remove();
		jQuery(myRepPicker).insertAfter('.plainText > .textGrid');
		//jQuery('.contextual-links-region').remove();
		jQuery('#repStates').change(function(){
				var myRep = jQuery('#repStates option:selected').text();
				jQuery('.myRep[data-territory*="{'+myRep+'}"]').removeClass('notPopulated').slideDown(300).css('opacity',1).siblings('.myRep').removeAttr('style');
		});
	}

	jQuery('[data-popup]').click(function(e){
		e.preventDefault();
		var popupElem = jQuery(this).attr('data-popup');
		var popupContent = jQuery(popupElem).html();
		jQuery('#popupOverlay .centerer').html(popupContent);
		jQuery('#popupOverlay').fadeIn(500);

		jQuery('form').click(function(e){
			e.stopPropagation();
		});
		jQuery('#popupOverlay').click(function(e){
			jQuery('#popupOverlay').fadeOut(750);
			setTimeout(function(){
				jQuery('#popupOverlay .centerer').html('');
			},750);
		});

	});

	jQuery('[data-video]').click(function(e){
		e.preventDefault();
		var myVideo = jQuery(this).attr('data-video');
		jQuery('#popupOverlay .centerer').html('<div class="closeBtn"><p>x</p></div><iframe src="'+myVideo+'" scrolling="no" allowfullscreen>');
		jQuery('#popupOverlay').fadeIn(500);

		jQuery('iframe').click(function(e){
			e.stopPropagation();
		});
		jQuery('#popupOverlay').click(function(e){
			jQuery('#popupOverlay').fadeOut(750);
			setTimeout(function(){
				jQuery('#popupOverlay .centerer').html('');
			},750);
		});
	});
});


/*Custom Selects*/

function dropdowns(){
	var ddTimer;
	jQuery('#sageWrap select').each(function(){
		var mySelect = jQuery(this);
		mySelect.addClass('converted');
		mySelect.parent().append('<div class="dropDown"><div class="listConstraint"><ul>');
		mySelect.siblings('.dropDown').find('.listConstraint').prepend('<div class="default">');
		var selectCount = 0;
		mySelect.children('option').each(function(){
			if(selectCount == 0){
				mySelect.siblings('.dropDown').find('.default').html('<p>'+jQuery(this).text()+'</p>');
			}
			else mySelect.siblings('.dropDown').find('ul').append('<li><p>'+jQuery(this).text()+'</p></li>');
			selectCount++;
		});
	});
	jQuery('#sageWrap .dropDown').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		if(!jQuery(this).hasClass('ddOpen')){
			clearTimeout(ddTimer);
			var ddHeight = jQuery(this).find('ul').outerHeight(true) + jQuery(this).find('.default').outerHeight(true);
			jQuery('.dropDown').removeClass('ddOpen').find('.listConstraint').removeAttr('style');
			jQuery(this).addClass('ddOpen').find('.listConstraint').css('height',ddHeight);
		}
		else{
			var myDropdown = jQuery(this);
			myDropdown.find('.listConstraint').removeAttr('style');
			setTimeout(function(){
				myDropdown.removeClass('ddOpen');
			},500);
		}
	});
	jQuery('body').click(function(e){
		if (jQuery(e.target).parents('.dropDown').size() > 0) {

		}
		else{
			jQuery('.dropDown').find('.listConstraint').removeAttr('style');
			ddTimer = setTimeout(function(){
					jQuery('.dropDown').removeClass('ddOpen');
			},500);
		}
	});

	jQuery('#sageWrap .dropDown li').click(function(e){
		e.preventDefault();
		var myOption = jQuery(this).html();
		var optionSpot = jQuery(this).index() + 1;
		jQuery(this).parents('.dropDown').find('.default').html(myOption);
		jQuery(this).parents('.dropDown').siblings('select').prop('selectedIndex', optionSpot);
	});
}

function msieversion() {
	var ua = window.navigator.userAgent;
	var msie = ua.indexOf("MSIE ");

	if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
			jQuery('body').addClass('ieFix');
	}
	else{
		if((!jQuery('html').hasClass('touchevents')) && (!jQuery('html').hasClass('touch'))){
			var parallaxHeader = jQuery('.hero').first();
			desktopAnims();
			jQuery(window).on('scroll', function(){
				var myScroll = jQuery(window).scrollTop()/2;
				parallaxHeader.find('.imageFader').css({'margin-top': myScroll+'px'});
				parallaxHeader.find('.centerWrap,.slideNavWrap').css({'margin-top': myScroll/2+'px'});
			});
		}

		if (/Edge\/12./i.test(navigator.userAgent)){
		   // This is Microsoft Edge
		   jQuery('body').addClass('ieFix');
		}
	}
	return false;
}

jQuery(window).load(function(){
	tileGrid = jQuery('.resourceWrap .scaler').isotope({
		itemSelector: '.resourceBlock',
		layoutMode: 'fitRows'
	});
	if(jQuery('.resourceWrap').length){
		if(window.location.hash){
			jQuery('.filterWrap a[href="'+window.location.hash+'"]').trigger('click');
		}
	}
})

jQuery(window).resize(function(){
	jQuery('.quoteSlider').height(jQuery('.quoteSlider .slide.current').height());
});

function featureCarousel(){
	var featureAnim = false;
	jQuery('.featureImage').each(function(){
		jQuery(this).find('.slide').first().addClass('current');
		jQuery(this).find('.carousel_navWrap button').first().addClass('current');
	});
	jQuery('.featureImage button:not(.arrow)').click(function(e){
		if(featureAnim == false){
			featureAnim = true;
			var myBtn = jQuery(this).index();
			var myWrap = jQuery(this).parents('.featureImage');
			var myCurrent = myWrap.find('.current').removeAttr('style');
			myWrap.find('.dotWrap .current,.carousel_navWrap .current').removeClass('current');
			setTimeout(function(){
				myCurrent.removeClass('current');
				featureAnim = false;
			},1000);
			jQuery(this).addClass('current');
			myWrap.find(jQuery('.slide')).eq(myBtn).css('z-index',2).addClass('current');

			if(myWrap.hasClass('lightNav') && jQuery('.iPhone').length){
				jQuery('.iPhone .current').removeClass('current');
				jQuery('.iPhone a').eq(myBtn).addClass('current');
				jQuery('.iPhone .phoneFader').attr('data-fade',myBtn);
			}
		}
	});
	jQuery('.featureImage button.arrow:last-of-type').click(function(e){
		var myParent = jQuery(this).parents('.carousel_navWrap');
		if(jQuery(myParent).find('.dot.current').next('.dot').length){
			jQuery(myParent).find('.dot.current').next('.dot').trigger('click');
		}
		else jQuery(myParent).find('.dot').first().trigger('click');
	});
	jQuery('.featureImage button.arrow:first-of-type').click(function(e){
		var myParent = jQuery(this).parents('.carousel_navWrap');
		if(jQuery(myParent).find('.dot.current').prev('.dot').length){
			jQuery(myParent).find('.dot.current').prev('.dot').trigger('click');
		}
		else jQuery(myParent).find('.dot').last().trigger('click');
	});
	jQuery('.iPhone a').click(function(e){
		e.preventDefault();
		if(featureAnim == false){
			var myBtn = jQuery(this).index();
			jQuery('.iPhone .current').removeClass('current');
			jQuery(this).addClass('current');
			jQuery('.centerPhone .carousel_navWrap button').eq(myBtn).trigger('click');
		}
	})
}

function heroCarousel(){
	var autoSlider;
	var sliderTime = 4000;
  var video = document.querySelector('.imageFader .slide:first-of-type video');
  if(jQuery('.slide video').length){
    setTimeout(function(){
      if ( video.readyState === 4 ) {

      }
      else{
        jQuery('.slide video').remove();
      }
    },5000);
  }
  if(jQuery('.slide video').length){
    jQuery('.slide').first().find('video')[0].play();
    sliderTime = 5500;
  }
	if(jQuery('.hero .slideNav').find('.dotWrap').length){
		if(jQuery('.hero .dotWrap').children().length > 1){
			jQuery('.slideNavWrap').fadeIn(500);
			autoSlider = setInterval(function(){
				jQuery('.hero .arrow:last-of-type').trigger('click');
			},sliderTime);
		}
	}
	else{
		if(jQuery('.hero .slideNav').children().length > 1){
			jQuery('.slideNavWrap').fadeIn(500);
			var mySlideBtns = jQuery('.hero .slideNav button');
			autoSlider = setInterval(function(){
				if(jQuery('.hero .slideNav button.current').next('button').length) jQuery('.hero .slideNav button.current').next('button').trigger('click');
				else mySlideBtns.first().trigger('click');
			},sliderTime);
		}
	}
	jQuery('.hero').each(function(){
		jQuery('button:not(.arrow):first-of-type').addClass('current');
		jQuery('.slide:first-of-type').addClass('current');
	});
	jQuery('.hero button:not(.arrow)').click(function(e){
		if(e.originalEvent !== undefined){
			clearInterval(autoSlider);
		}
		var mySlider = jQuery(this).parents('.hero');
		var slideSpot = jQuery(this).index();
		if(!jQuery(this).hasClass('current')){
			mySlider.find('button.current:not(.arrow)').removeClass('current');
			jQuery(this).addClass('current');
			mySlider.find('.slide.current').css('z-index',1).addClass('animOut');
			mySlider.find('.slide').eq(slideSpot).css('z-index',2).addClass('current');
			setTimeout(function(){
				mySlider.find('.slide.animOut').removeClass('current animOut').css('z-index','');
				mySlider.find('.slide').eq(slideSpot).css('z-index','');
			},1000);

			if(jQuery('.slide video').length){
				var myVid = jQuery('.slide').eq(slideSpot).find('video')[0];
				jQuery('.slide video').each(function(){
					var lastVid = jQuery(this).get(0);
					lastVid.pause();
					setTimeout(function(){
						lastVid.currentTime = 0;
						myVid.play();
					},1000);
				});
			}
		}

	});
	jQuery('.hero .arrow:first-of-type').click(function(e){
		if(e.originalEvent !== undefined){
			clearInterval(autoSlider);
		}
		var mySlider = jQuery(this).parents('.hero');
		if(mySlider.find('.dot').first().hasClass('current')){
			mySlider.find('.dot').last().trigger('click');
		}
		else{
			mySlider.find('.dot.current').prev().trigger('click');
		}
	});
	jQuery('.hero .arrow:last-of-type').click(function(e){
		if(e.originalEvent !== undefined){
			clearInterval(autoSlider);
		}
		var mySlider = jQuery(this).parents('.hero');
		if(mySlider.find('.dot').last().hasClass('current')){
			mySlider.find('.dot').first().trigger('click');
		}
		else{
			mySlider.find('.dot.current').next().trigger('click');
		}
	});
}

function quoteCarousel(){
	var mySlider = jQuery('.quoteSlider');
	var slideArrows = jQuery('.quoteSlider .arrowNav button');
	jQuery('.quoteSlider .slide').wrapAll('<div class="slideWrap">');
	jQuery('.quoteSlider').each(function(){
		var mySlider = jQuery(this);
		var slideCount = 0;
		var slideHeight = 0;
		var dirSwitch = false;
		mySlider.find('.dotNav').html('');
		mySlider.find('.slide').first().addClass('current');
		mySlider.height(mySlider.find('.slide.current').height());
		mySlider.find('.slide').each(function(){
			if(slideCount == 0) mySlider.find('.dotNav').append('<button class="current">');
			else mySlider.find('.dotNav').append('<button>');
			slideCount++;
		});
		if(slideCount < 2){
			mySlider.find('.dotNav,.arrowNav').hide();
		}
	});
	var slideDots = jQuery('.quoteSlider .dotNav button');

	slideDots.click(function(e){
		if(!jQuery(this).hasClass('current')){
			jQuery(this).siblings().removeClass('current');
			jQuery(this).addClass('current');

			var nextSlide = jQuery(this).index();

			if (e.originalEvent !== undefined) dirSwitch = false;

			if(jQuery('.quoteSlider .slide').eq(nextSlide).index() > jQuery('.quoteSlider .slide.current').index()){
				var slideDir = 100;
			}
			else var slideDir = -100;

			if(dirSwitch == true) slideDir = -slideDir;

			jQuery('.quoteSlider .slide').eq(nextSlide).css('left',slideDir+'%').transition({
				left: 0
			},600, 'ease-out', function(){
				jQuery(this).addClass('current');
			});
			jQuery('.quoteSlider .slide.current').transition({
				left: -slideDir+'%'
			},600, 'ease-out', function(){
				jQuery(this).removeClass('current');
			});

			slideHeight = jQuery('.quoteSlider .slide').eq(nextSlide).height();
			jQuery('.quoteSlider').transition({
				height: slideHeight
			},600, 'ease-out');
		}
	});
	slideArrows.click(function(e){
		if(jQuery(this).index() == 0){
			if(slideDots.first().hasClass('current')){
				dirSwitch = true;
				slideDots.last().trigger('click');
			}
			else{
				dirSwitch = false;
				slideDots.filter('.current').prev().trigger('click');
			}
		}
		else{
			if(slideDots.last().hasClass('current')){
				dirSwitch = true;
				slideDots.first().trigger('click');
			}
			else{
				dirSwitch = false;
				slideDots.filter('.current').next().trigger('click');
			}
		}
	});
}

function homeBindings(){
	jQuery('.fixedBGs').addClass('locked');
	jQuery('.fader').each(function(){
			if(jQuery(this).offset().top - jQuery(window).scrollTop() < jQuery(window).height()/2){
				var faderStart = jQuery(this).attr('data-count') - 1;
				jQuery('.fader.current').removeClass('current');
				jQuery(this).addClass('current');
				jQuery('.fixedBG.current').removeClass('current');
				jQuery('.fixedBG').eq(faderStart).addClass('current');
			}
	});

	jQuery(window).on('scroll', function(){
		if(jQuery(window).scrollTop() > 10){
			jQuery('nav').removeClass('expanded');
			jQuery('body').addClass('scrolled');
		}
		else{
			jQuery('nav').addClass('expanded');
			jQuery('body').removeClass('scrolled');
		}

		thisScroll = jQuery(window).scrollTop();
		if(thisScroll > lastScroll &&  jQuery('.fader.current').next('.fader').length){
			if(jQuery('.fader.current').next('.fader').offset().top - thisScroll < jQuery(window).height()/2){
				jQuery('.fader.current').removeClass('current').next('.fader').addClass('current');
				jQuery('.fixedBG.current').removeClass('current').next('.fixedBG').addClass('current');
			}
		}
		else if(lastScroll > thisScroll && jQuery('.fader.current').prev('.fader').length){
			if(jQuery('.fader.current').prev('.fader').offset().top - thisScroll > -jQuery(window).height()/2){
				jQuery('.fader.current').removeClass('current').prev('.fader').addClass('current');
				jQuery('.fixedBG.current').removeClass('current').prev('.fixedBG').addClass('current');
			}
		}
		lastScroll = thisScroll;
	});
}

function heroBindings(){
	var myBackground = jQuery('.hero .imageFader');
	var myText = jQuery('.hero .headline, .hero .slideNavWrap');
	var thisScroll = 0;
	var lastScroll = 0;
	jQuery(window).on('scroll', function(){
		thisScroll = jQuery(window).scrollTop();
		if(thisScroll > lastScroll){
			for(i = lastScroll; i < thisScroll; i++){
				myBackground.css({
						'transform':'translateY('+(thisScroll/2)+'px)',
						'-webkit-transform':'translateY('+(thisScroll/2)+'px)',
						'-moz-transform':'translateY('+(thisScroll/2)+'px)'
				});
				myText.css({
						'transform':'translateY('+(thisScroll/4)+'px)',
						'-webkit-transform':'translateY('+(thisScroll/4)+'px)',
						'-moz-transform':'translateY('+(thisScroll/4)+'px)'
				});
			}
		}
		else{
			for(i = thisScroll; i < lastScroll; i++){
				myBackground.css({
						'transform':'translateY('+(thisScroll/2)+'px)',
						'-webkit-transform':'translateY('+(thisScroll/2)+'px)',
						'-moz-transform':'translateY('+(thisScroll/2)+'px)'
				});
				myText.css({
						'transform':'translateY('+(thisScroll/4)+'px)',
						'-webkit-transform':'translateY('+(thisScroll/4)+'px)',
						'-moz-transform':'translateY('+(thisScroll/4)+'px)'
				});
			}
		}
		lastScroll = thisScroll;
	});
}

function desktopAnims(){
	var thisGScroll = 0, lastGScroll = 0;
	jQuery('#sageWrap section:not(.hero) h2,#sageWrap section:not(.hero) h3, #sageWrap section.quoteSlider h5, .iconImg').each(function(){
		if(jQuery(this).offset().top - thisGScroll < jQuery(window).height()){
			jQuery(this).addClass('animIn');
		}
	});

	jQuery(window).scroll(function(){
		thisGScroll = jQuery(window).scrollTop();
		jQuery('#sageWrap section:not(.hero) h2,#sageWrap section:not(.hero) h3, #sageWrap section.quoteSlider h5, .iconImg').each(function(){
			if(jQuery(this).offset().top - thisGScroll < jQuery(window).height()/1.1){
				jQuery(this).addClass('animIn');
				if(jQuery(this).hasClass('iconImg')){
					jQuery(this).parents('.iconBox').siblings('.iconBox').find('.iconImg').addClass('animIn');
				}
			}
		});
		lastGScroll = thisGScroll;
	});
}


jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
