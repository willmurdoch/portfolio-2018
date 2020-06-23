$('.clickWrap').click(function(){
  $(this).parent().removeClass('out').toggleClass('in').siblings().toggleClass('out').removeClass('in');
});

function setCircles(){
  $('.circle').each(function(){
    var mySpot = $(this).parents('.project').offset().top - $(window).scrollTop();
    mySpot = mySpot/5;
    $(this).css('top', 'calc(50% - '+mySpot+'px)');
    if($(window).width() > 800){
      $(this).siblings('.textWrap').css('transform', 'translateY('+mySpot/2+'px) translateZ(0)');
      $(this).siblings('.imageWrap').find('.mobile').css('transform', 'translateY('+mySpot+'px) translateZ(0)');
      $(this).siblings('.imageWrap').find('.desktop').css('transform', 'translateY('+mySpot/3+'px) translateZ(0)');
    }
  });
}

function checkVideo(){
  $('video').each(function(){
    var video = $(this).get(0);
    var distTop = $(this).offset().top - $(window).scrollTop();
    if(distTop < $(window).height()/1.5 && distTop + $(this).height() > 100 && video.paused) {
      $(this).trigger('play');
    }
    else if((distTop + $(this).height() < 100 || distTop > $(window).height()) && !video.paused){
      $(this).trigger('pause');
      video.currentTime = 0;
    }
  });
}

$(document).ready(function(){
  setCircles();
  checkVideo();
});

$(window).scroll(function(){
  setCircles();
  checkVideo();
});
