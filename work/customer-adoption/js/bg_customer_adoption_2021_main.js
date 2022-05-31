//Menu bindings
$('.burgerWrap').click(function(e){
  e.preventDefault();
  e.stopPropagation();
  $(this).toggleClass('open');
});
$('.burgerWrap a, .burgerMenu').click(function(e){
  e.stopPropagation();
});
//Close menu if you click anywhere else
$(window).click(function(){
  if($('.burgerWrap').hasClass('open')){
    $('.burgerWrap').removeClass('open');
  }
});

//Delay animations til page is ready
$(document).ready(function(){
  $('img[data-src]').each(function(){
    var mySrc = $(this).attr('data-src') + '?rand=' +  Math.floor(1000 + Math.random() * 9000);
    $(this).attr('src', mySrc);
  });
  //IE and Edge can't animate SVGs
  if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.match(/Edge/)) {
    $('body').addClass('internetExplorer');
    $('img[src*="_anim"]').each(function(){
      var mySrc = $(this).attr('src').replace('_anim', '');
      $(this).attr('src', mySrc);
    });
  }
})

//Check scroll for fill bar up top, animations
$(window).scroll(function(){
  var currentScroll = $(window).scrollTop();

  //Fill progress bar under nav
  var totalScroll = document.documentElement.scrollHeight || document.body.scrollHeight;
  totalScroll -= window.innerHeight;
  var fillWidth = Math.ceil(100*(currentScroll/totalScroll));
  $('#fillBar').width(fillWidth + '%');

  //Background appears when you start scrolling
  if(currentScroll > 100){
    $('#mainNav').addClass('scrolled');
  }
  else $('#mainNav').removeClass('scrolled');

  //Scroll animations
  $('[data-animated]').each(function(){
    var myDistance = $(this).offset().top - currentScroll;
    if(myDistance < $(window).height()/2){
      $(this).addClass('animated').removeAttr('data-animated');
    }
  })
});

//Animate between hash links
$(document).on('click', 'a[href^="#"]', function(e){
  e.preventDefault();
  e.stopPropagation();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
});

//Track non-hash link clicks
$(document).delegate('a:not([href^="#"])', 'click', function(e){
  if("ga" in window){
    tracker = ga.getAll()[0];
    if(tracker){
      tracker.send("event", "Communications Center", "click", $(this).attr('href'));
    }
  }
});

//Carousel logic
var isAnimating = false, lastSlide;
$(document).delegate('.carousel button', 'click', function(e){
  var mySlider = $(this).parents('.carousel');
  var fontSize = parseInt($("html").css('font-size').split('px')[0]);
  if(isAnimating == false){
    isAnimating = true;
    if($(this).hasClass('right')){
      //Move first slide to end
      if(mySlider.find('.slide').last().hasClass('last')){
        lastSlide = mySlider.find('.slide').first();
        var dupeSlide = lastSlide.clone();
        dupeSlide.removeClass('first last').removeAttr('style').appendTo('.slides');
        setTimeout(function(){
          lastSlide.remove();
        }, 500);
      }
      setTimeout(function(){
        //Ditch old frame
        mySlider.find('.slide.first').animate({
          left: -(mySlider.find('.slide.first').width()*2)
        }, 500, function(){
          $(this).removeClass('first').removeAttr('style');
        });
        //New first frame
        mySlider.find('.slide.current').animate({
          left: -(mySlider.find('.slide.current').width()) - (fontSize*4)
        }, 500, function(){
          $(this).addClass('first').removeClass('current').removeAttr('style');
        });
        //New current frame
        mySlider.find('.slide.last').animate({
          left: 0
        }, 500, function(){
          $(this).removeClass('last').addClass('current').removeAttr('style');
        });
        //New last frame
        mySlider.find('.slide.last').next().animate({
          left: mySlider.find('.slide.last').next().width() + (fontSize*4)
        }, 500, function(){
          $(this).addClass('last').removeClass('current').removeAttr('style');
        });
      }, 50);
    }
    else{
      //Move last slide to start
      if(mySlider.find('.slide').first().hasClass('first')){
        lastSlide = mySlider.find('.slide').last();
        var dupeSlide = lastSlide.clone();
        dupeSlide.removeClass('first last').removeAttr('style').prependTo('.slides');
        setTimeout(function(){
          lastSlide.remove();
        }, 500);
      }
      setTimeout(function(){
        //Ditch old frame
        mySlider.find('.slide.last').animate({
          left: mySlider.find('.slide.last').width()*2
        }, 500, function(){
          $(this).removeClass('last').removeAttr('style');
        });
        //New first frame
        mySlider.find('.slide.first').prev().css('left', '-200%').animate({
          left: -(mySlider.find('.slide.current').prev().width()) - (fontSize*4)
        }, 500, function(){
          $(this).addClass('first').removeAttr('style');
        });
        //New current frame
        mySlider.find('.slide.first').animate({
          left: 0
        }, 500, function(){
          $(this).removeClass('first').addClass('current').removeAttr('style');
        });
        //New last frame
        mySlider.find('.slide.current').animate({
          left: mySlider.find('.slide.current').width() + (fontSize*4)
        }, 500, function(){
          $(this).removeClass('current').addClass('last').removeAttr('style');
        });
      }, 50);
    }
    setTimeout(function(){
      isAnimating = false;
    }, 550);
  }
});
