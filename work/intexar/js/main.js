$(document).ready(function(){
  $('#topNav .desktop a, .divider').hover(function(){
    $(this).siblings('.active').addClass('noHover');
  }, function(){
    $(this).siblings('.noHover').removeClass('noHover');
  });

  if($(window).width() < 1025 && $('html').hasClass('touch')){
    $('#heat .fullscreen-bg video').remove();
    $('#heat .fullscreen-bg').append('<div class="poster">');
  }

});

$(window).scroll(function(){
  if($(window).scrollTop() > $(window).height()/2){
    $('#topNav').addClass('active');
  }
  else $('#topNav').removeClass('active');
});

$(document).delegate('#topNav .mobile button', 'click', function(){
  $(this).toggleClass('expanded').siblings('div').fadeToggle();
});


$(document).ready(function() {
	scrollLogic();
})
//When you scroll the window
$(window).scroll(function(){
	scrollLogic();
})
function scrollLogic() {
	//Loop through each section
	$('section').each(function(){
		//Check if the section is far enough into the viewport, isn't too far out of the viewport (if you land on a deep link), and if it has already animated
		if(($(this).offset().top - $(window).scrollTop() < $(window).height()/3) && ($(this).offset().top - $(window).scrollTop() > -$(window).height()/1.5) && $(this).attr('data-animated') != 'true'){
			//Add attribute for CSS selector
			$(this).attr('data-animated', 'true');
		}
	});
}



// SMOOTH SCROLL
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
