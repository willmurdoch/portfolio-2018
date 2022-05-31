//Load in content for ease of editing
$(document).ready(function(){
  $('body').addClass('loaded');

  //Set up animations
  //Desktop triggers on hover
  if($(window).width() > 900){
    var myImg, staticSrc, animSrc;
    $('.dayWrap').hover(function(){
      myImg = $(this).find('img.base');
      staticSrc = $(myImg).attr('src');
      animSrc = staticSrc.replace('still', 'anim').replace('.png', '.gif');
      $(myImg).attr('src', animSrc);
    }, function(){
      $(myImg).attr('src', staticSrc);
    });
  }
  //Mobile always animating
  else{
    $('.dayWrap').each(function(){
      myImg = $(this).find('img.base');
      staticSrc = $(myImg).attr('src');
      animSrc = staticSrc.replace('still', 'anim').replace('.png', '.gif');
      $(myImg).attr('src', animSrc);
    });
  }

  //Drawer bindings
  $('.dayWrap').click(function(e){
    var section = $(this).parents('.day');
    var mySection = $(this).parents('.day').attr('data-count');
    if(!$(this).hasClass('open')){
      //Generate the drawer
      section.addClass('toggled');
      $(this).addClass('open');
      var drawerContent = section.find('.hiddenContent').html();
      var myDrawer = $('#oDrawer').clone();
      myDrawer.attr('data-day', section.attr('data-count'));
      $(myDrawer).removeAttr('id');
      $(myDrawer).html(drawerContent);
      $(myDrawer).find('.scaler').prepend('<div class="closeBtn">&times;</div>');
      if(section.attr('data-count') % 2 === 0 || $(window).width() < 800){
        $(section).after($(myDrawer));
      }
      else $(section).next().after($(myDrawer));

      //Bind social buttons for dynamically generated drawers
      genSocial();

      //Animate in/out the drawer
      var myHeight = $(myDrawer).find('.scaler').outerHeight(true);
      $(myDrawer).animate({
        height: myHeight
      }, 500);
      if($(window).width() >  800){
        $(myDrawer).siblings('.contentDrawer').animate({
          height: 0
        }, 500);
        section.siblings('.day').find('.open').removeClass('open');
        section.siblings('.day').removeClass('toggled');
      }
      $('.closeBtn').click(function(){
        $('.day[data-count="' + $(this).parents('.contentDrawer').attr('data-day') + '"] .dayWrap').removeClass('open');
        $('.day[data-count="' + $(this).parents('.contentDrawer').attr('data-day') + '"]').removeClass('toggled');
        $(this).parents('.contentDrawer').animate({
          height: 0
        }, 500, function(){
          $(this).parents('.contentDrawer').remove();
        });
      });
    }
    else $('.contentDrawer[data-day="'+mySection+'"]').find('.closeBtn').trigger('click');
  });

  //Toggle extra promo
  if(window.location.hash == '#noPromoText'){
    $('#noPromoText').addClass('current');
  }

  //Load up social info after load
  genSocial();
});

//Static button bindings
$('.promoBanner .close').click(function(e){
  $('.promoBanner').addClass('out');
});
$('#burger').click(function(e){
  e.preventDefault();
  $('nav ul').fadeToggle(300);
});

function genSocial(){
  var myURL = location.protocol + '//' + location.host + location.pathname;
  var myMessage = encodeURIComponent("If I don’t seem like myself on Twitter, it’s probably because I’m doing the Phone Cleanse. Want to join me? @XfinityMobile ");
  $('.twitter').attr({'href': 'https://twitter.com/intent/tweet?text='+myMessage+'%20'+myURL, 'target': '_blank'});
  $('.facebook').attr({'href': 'http://www.facebook.com/share.php?u='+myURL, 'target': '_blank'});
}

//Scroll logic
var thisScroll = lastScroll = 0;
$(window).scroll(function(){
  thisScroll = $(window).scrollTop();
  if($('.calBtn').offset().top - $(window).scrollTop() < $(window).height()/1.5){
    $('.calBtn').addClass('expanded');
  }
  else $('.calBtn').removeClass('expanded');

  if($(window).width() < 800){
    if(thisScroll > lastScroll && thisScroll > 0){
      $('.promoBanner').addClass('hide');
    }
    else{
      $('.promoBanner').removeClass('hide');
    }
  }
  lastScroll = thisScroll;
});
