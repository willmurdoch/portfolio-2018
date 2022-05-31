$(document).ready(function(){
  if($('.score-feed').length){
    scheduleSlider();
    $('.score-feed').css('opacity',1);
  }
});

//Resize logic
$(window).resize(function(){
  scheduleScales();
});

//Schedule slider
var myOffset, myMargin, myStart
//Define how far it moves with each click, initial position
function scheduleScales(){
  //Compensate for arrow buttons and margin on boxes when calculating start/animation positions
  myOffset = $('.score-arrow').outerWidth(true);
  myMargin = parseInt($('.table-wrap').first().css('margin-left'),10);
  if($('.score-block:not(.past)').length){
    myStart = $('.score-block:not(.past)').first().position().left - myOffset - myMargin;
    $('.scores-all').scrollLeft(myStart);
  }
}
//Bind arrow buttons
function scheduleSlider(){
  scheduleScales();
  //Scroll schedule area when arrows clicked
  $('.score-arrow').click(function(){
    myStart = $('.scores-all').scrollLeft();
    if($(this).hasClass('rBtn')){
      var myDistance = myStart + $('.score-block').width() + myMargin
      $('.scores-all').animate({
        scrollLeft: myDistance
      }, 300, checkSlider());
    }
    else{
      var myDistance = myStart - $('.score-block').width() - myMargin
      $('.scores-all').animate({
        scrollLeft: myDistance
      }, 300, checkSlider());
    }
  });
}
function checkSlider(){
    //alert($('.scores-all').scrollWidth);
}

//Search popup functionality
var preservedScroll = 0;
$('.navi-search').click(function(){
  //Trigger search overlay
  if(!$(this).hasClass('navi-search-close')){
    $(this).addClass('navi-search-close');
    //Save scroll position to fake the page not moving after content is locked
    preservedScroll = $(window).scrollTop();
    $('body').addClass('search-overflow-hidden');
    $('.content').css('top', -preservedScroll);
    //Set scroll to top for search content
    $(window).scrollTop(0);
    $('.search-bar-main-container').removeClass('closed');
  }
  //Hide search overlay
  else{
    $(this).removeClass('navi-search-close');
    //Remove offset position for main content once it's not locked
    $('.content').removeAttr('style');
    $('body').removeClass('search-overflow-hidden');
    $('.search-bar-main-container').addClass('closed');
    //Reset scroll to position before search was triggered
    $(window).scrollTop(preservedScroll);
    $('.search-content').removeAttr('style');
  }
});
//Display search content
$('.search-icon').click(function(){
  $('.search-content').fadeIn(500);
});

//Mobile nav open/close
$('.mobile-burger').click(function(){
  $('.mobile-menu').css('width','100%');
  $('.mobile-menu-wrap').css('left',0);
});
$('.mobile-close').click(function(){
  $('.mobile-menu, .mobile-menu-wrap').removeAttr('style');
});

//Scroll logic
var thisScroll = 0, lastScroll = 0;
$(window).scroll(function(){
  thisScroll = $(window).scrollTop();
  //Collapse/expand nav bar - only impacts mobile
  if(thisScroll > lastScroll && thisScroll > 100){
    $('.navbar').attr('collapsed','');
  }
  else if(lastScroll > thisScroll && thisScroll < 100){
    $('.navbar').removeAttr('collapsed');
  }
  lastScroll = thisScroll;
});
