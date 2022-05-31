$(document).ready(function(){

  //Bindings
  if($('.case-studies').length)
    caseStudyBindings();
  if($('.contact-form').length)
    contactBindings();
  if($('.cta.video').length)
    backgroundVideo();

  $('.hero').each(function(){
    if($(this).find('.slide').length > 1){
      var mySlider = $(this);
      setInterval(function(){
        if(mySlider.find('.heroSlides .slide.current').next('.slide').length){
          mySlider.find('.heroSlides .slide.current').removeClass('current').next('.slide').addClass('current');
        }
        else{
          mySlider.find('.heroSlides .slide').removeClass('current').siblings().first().addClass('current');
        }
      }, 4500);
    }
  });

  $('[data-contact-modal]').click(function(e){
    e.preventDefault();
    var myEmail = $(this).parents('form').find('input[type="email"]').val();
    $('#popupWrap input[type="email"]').val(myEmail);
    $('#popupWrap').fadeIn(500);
  });

  $('#popupWrap .closeBtn').click(function(){
    $('#popupWrap').fadeOut(500);
  });

  //Loop through each section and see if it has the animTrigger animation set, assign class for more precise loops later on
  $('section').each(function(){
    if($(this).css('animation-name') == 'animTrigger') $(this).attr('data-animated', 'false');
  });
  if(!$('.hero + .hero').length) $('section:not(.hero)').first().attr('data-animated','true');
  scrollLogic();

  if($('html').hasClass('no-touchevents')){
    $('.nav-burger').hover(function(){
      $(this).addClass('hovered');
    });
  }
  var scrollInterval = setInterval(function() {
    scrollLogic();
  }, 10);

});

function closeNav(){
  if($(window).width() > 800){
    $('#main-nav').removeClass('expanded');
    $('.nav-burger').removeClass('close');
  }
}

$(window).click(function(){
  closeNav();
});

//Scroll functions
$(window).scroll(function(){
  closeNav();
});

//Recalculate assigned widths/heights based on new screen size
$(window).resize(function(){
  caseStudySizer();
  scrollLogic();
});


/*----------------------------Nav button binding----------------------------*/
$('#main-nav').click(function(e){
  e.stopPropagation();
});
$('.nav-burger').click(function(e){
  e.stopPropagation();
  if(!$(this).hasClass('close')){
    $(this).removeClass('open').addClass('close').parents('#main-nav').addClass('expanded');
  }
  else{
    $('.nav-burger').removeClass('close').parents('#main-nav').removeClass('expanded');
    if($('html').hasClass('touchevents')){
      $('.nav-burger').addClass('open');
    }
  }

});
$('.nav-burger').mouseout(function(){
  $(this).removeClass('opening');
});


/*----------------------------Scroll animations----------------------------*/
var thisScroll = 0, lastScroll = 0;
function scrollLogic(){
  thisScroll = $(window).scrollTop();

  //Scroll past full hero section when you scroll down - focus is the trigger. Only works on first element per page
  if($('html').hasClass('no-touchevents')){

    if($('.hero').length){
      $('.hero').each(function(){
        if($(this).offset().top - $(window).scrollTop() > -$(window).height() && $(this).offset().top - $(window).scrollTop() < $(window).height()){
          var myTranslate =  $(window).scrollTop() - $(this).offset().top;
          $(this).find('.heroSlides').css('transform', 'translateY('+myTranslate/4+'px)');
          $(this).find('.scrollWrap').css('transform', 'translateY('+myTranslate/8+'px)');
        }
        if($(this).offset().top - $(window).scrollTop() < -200){
          $(this).find('.can-scroll').css({
            'transition-delay': '0s',
            'opacity': 0
          });
        }
        else{
          $(this).find('.can-scroll').css({
            'opacity': 1
          });
        }
      });
    }

    if($('.fullImage').length){
      $('.fullImage').each(function(){
        if($(this).offset().top - $(window).scrollTop() > -$(window).height() && $(this).offset().top - $(window).scrollTop() < $(window).height()){
          var myTranslate =  $(window).scrollTop() - $(this).offset().top;
          $(this).find('.background').css('transform', 'translateY('+myTranslate/4+'px)');
          $(this).find('.scrollWrap').css('transform', 'translateY('+myTranslate/8+'px)');
        }
      });
    }

    //Loop through all elements flagged for scroll animations
    $('[data-animated="false"]').each(function(){
      if($(this).offset().top - thisScroll < $(window).height()/1.5)
        $(this).attr('data-animated', 'true');
    });
  }

  //Switch nav format once you're past image content
  if(!$('.hero').length)
    return false;
  else if(thisScroll > $('.hero').outerHeight(true)*$('.hero').length - 100)
    $('#main-nav').addClass('sticky');
  else
    $('#main-nav').removeClass('sticky');

  //Get previous scroll for comparison
  lastScroll = thisScroll;
}


/*----------------------------Bind case study actions----------------------------*/
function caseStudyBindings(){
  //Figure out how big each tile needs to be based on the longest piece of content
  caseStudySizer();

  $('.case-studies .dot-nav div').click(function(){
    //Animate to the next/prev slide when you click on the nav dot
    $(this).addClass('current').siblings().removeClass('current');
    var mySpot = $(this).index();
    $('.case-studies .cs-slide').eq(mySpot).addClass('current').siblings().removeClass('current');
    $('.case-studies .cs-wrap').animate({
      scrollLeft: mySpot*$('.case-studies .cs-slide').width()
    }, 750);

    //Hide right arrow if nothing to scroll to, otherwise show it
    if(!$('.case-studies .cs-slide.current').next('.cs-slide').length){
      $('.case-studies .next-arrow').addClass('disabled');
    }
    else $('.case-studies .next-arrow').removeClass('disabled');

    //Hide left arrow if nothing to scroll to, otherwise show it
    if(!$('.case-studies .cs-slide.current').prev('.cs-slide').length){
      $('.case-studies .prev-arrow').addClass('disabled');
    }
    else $('.case-studies .prev-arrow').removeClass('disabled');
  });

  //Bind the arrows to cycle slides
  $('.case-studies .prev-arrow').click(function(){
    $('.case-studies .dot-nav div.current').prev().trigger('click');
  });
  $('.case-studies .next-arrow').click(function(){
    $('.case-studies .dot-nav div.current').next().trigger('click');
  });
}

//Scale case study entries to tallest content piece
function caseStudySizer(){
  var csHeight = 0;
  $('.case-studies .cs-text').each(function(){
    if($(this).outerHeight(true) > csHeight) csHeight = $(this).outerHeight(true);
  });
  $('.case-studies .cs-item').css('height', csHeight);
}


/*----------------------------Events for contact page----------------------------*/
function contactBindings(){
  //Rep picker custom dropdown
  $('.custom-select').click(function(){
    $(this).toggleClass('active');
  });
  $('.custom-select label:not(:first-of-type)').click(function(){
    var myText = $(this).text();
    $(this).siblings('label').first().text(myText);
    var mySection = $(this).attr('for');
    $('#'+mySection).slideToggle(500);
    $('#'+mySection).siblings('[style*=block]').slideToggle(500);
  });

  //Show submitted message on submit - add ajax submission here
  $('#contactform').submit(function(e){
    e.preventDefault();
    $('#contactform, h2').hide();
    $('.thanks').fadeIn(500);
  });
  //Reset form
  $('#reload-form').click(function(){
    $('.thanks').hide();
    $('#contactform').fadeIn(500);
    $('#contactform')[0].reset();
  });
}


/*----------------------------Events for controlled background videos----------------------------*/
function backgroundVideo(){
  var playContent, pauseContent = '<span style="font-size:1rem;top:0.05rem;">&#10074;&#10074;</span>&nbsp;&nbsp;<p>Pause</p>';
  $('.cta.video').click(function(e){
    e.preventDefault();
    var myVideo = $(this).parents().find('.fgVid');
    $(this).parents('.fullImage').find('video.background').fadeOut(500).get(0).pause();
    $(this).parents('.fullImage').find('.scaler').css({'opacity': 0, 'z-index': 0});
    myVideo.attr('src', myVideo.attr('src')+'&autoplay=1');
    setTimeout(function(){
      myVideo.fadeIn(500);
    }, 100);
  });
}

//Disable hover on touch devices
var touch = 'ontouchstart' in document.documentElement
            || (navigator.MaxTouchPoints > 0)
            || (navigator.msMaxTouchPoints > 0);

if (touch) { // remove all :hover stylesheets
    try { // prevent exception on browsers not supporting DOM styleSheets properly
        for (var si in document.styleSheets) {
            var styleSheet = document.styleSheets[si];
            if (!styleSheet.rules) continue;

            for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                if (!styleSheet.rules[ri].selectorText) continue;

                if (styleSheet.rules[ri].selectorText.match(':hover')) {
                    styleSheet.deleteRule(ri);
                }
            }
        }
    } catch (ex) {}
}
