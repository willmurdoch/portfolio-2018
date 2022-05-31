var $ = jQuery.noConflict(), autoScrolling = false;
$(document).ready(function(){
  init();
});

function init(){
  //Switch active nav item on click
  $('#sideNav a').click(function(e){
    $(this).parent().siblings().removeClass('current');
    $(this).parent().addClass('current');
  });

  var bgPos = -$(window).scrollTop()/10;
  $('#pattern').css('background-position', '50% '+bgPos+'px');

  if($('.timer').length) countDown();

  //Animate anchor jumps

  $('a[href^="#"]:not(.navTrigger)').click(function(e){
    e.preventDefault();
    autoScrolling = true;
    if($(this).hasClass('navLink')){
      $(this).addClass('current').siblings().removeClass('current');
    }
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500, function(){
      autoScrolling = false;
    });
  });
  $('#mainNav .navLink').click(function(){
    $('#mnav, #mainNav').attr('data-open', 'false');
  });
  $('#mainNav .navTrigger').click(function(){
    $('#mnav, #mainNav').attr('data-open', 'true');
  });
  $('#mainNav .closeBtn').click(function(){
    $('#mnav, #mainNav').attr('data-open', 'false');
  });

  $('.scrollPrompt').click(function(){
    $('body, html').animate({
      scrollTop: $('section[data-animated="true"]').nextAll('section').offset().top
    }, 500);
  ;
  });

  $('video').on('ended', function(){
    if($(this).siblings('.replay').length){
      $(this).siblings('.replay').css({'opacity': '1', 'margin-bottom': '0'});
    }
  });
  $('video').on('play', function(){
    if($(this).siblings('.replay').length){
      $(this).siblings('.replay').removeAttr('style');
    }
  });

  $('.replay').click(function(){
    var myVid = $(this).siblings('video')[0];
    myVid.currentTime = 0;
    myVid.play();
  });

  //Soundboard controls
  $('#monster-mashup .monster').click(function(){
    var mySound = $(this).find('audio')[0];
    mySound.currentTime = 0;
    mySound.play();
    $(this).addClass('playing');
    mySound.addEventListener('ended', function(){
      $(this).parent().removeClass('playing');
    });
  });

  setInterval(function(){
    scrollLogic();
  }, 33);
}

//Handle scroll events
function scrollLogic(){
  //Collapse main nav when you're past the top of the page, expand it when you get back again
  // if($(window).scrollTop() > 100 && !$('#mainNav').hasClass('collapsed')){
  //   $('#mainNav').addClass('collapsed');
  // }
  // else if($(window).scrollTop() < 110 && $('#mainNav').hasClass('collapsed')){
  //   $('#mainNav').removeClass('collapsed');
  // }

  var bgPos = -$(window).scrollTop()/10;
  $('#pattern, .patternBG').css('background-position', '50% '+bgPos+'px');

  //Loop through the sections and see if they should be animating/toggle the active nav element
  $('section').each(function(){
    if(($(this).offset().top - $(window).scrollTop() < $(window).height()/3) && ($(this).offset().top - $(window).scrollTop() > -$(window).height()/3) && $(this).attr('data-animated') != 'true' && autoScrolling == false){
      if($(this).attr('data-animated') != 'true'){
        if(!$('#sideNav a[href="#'+$(this).attr('id')+'"]').parent().hasClass('current') && $(window).width() > 750 && autoScrolling == false){
          $('#sideNav a[href="#'+$(this).attr('id')+'"]').parent().addClass('current').siblings().removeClass('current');
        }
        $(this).attr('data-animated','true');
        $(this).siblings('section').attr('data-animated','false');
        if($(this).find('video').length){
          var myVideo = $(this).find('video')[0];
          myVideo.play();
        }
        if($(this).attr('id') != 'about'){
          $(this).siblings('section[data-animated="false"]').each(function(){
            if($(this).find('video').length && $(this).attr('id')){
              var myVideo = $(this).find('video')[0];
              myVideo.pause();
              myVideo.currentTime = 0;
            }
          });
        }
      }
    }
  });
}

function countDown(){
  setInterval(function(){
    $('.timer').load(document.URL +  ' .timer');
  }, 1000);
}
