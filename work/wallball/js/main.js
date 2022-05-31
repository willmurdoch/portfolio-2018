//Need this to let touch events pass through to the animation iframes
if("ontouchstart" in window){
  window.addEventListener('touchstart', {});
}

//Pass keypresses into frame if not focused
var myFrame = $('#animation')[0];
window.addEventListener("keydown", function (e) {
  myFrame.contentWindow.focus();
  // switch(e.key){
  //   case "Down": // IE/Edge specific value
  //     scrollScene('down');
  //   case "ArrowDown":
  //     scrollScene('down');
  //     break;
  //   case "Up": // IE/Edge specific value
  //     scrollScene('up');
  //   case "ArrowUp":
  //     scrollScene('up');
  //     break;
  // }
});

//Depending on aspect ratio, display mobile or desktop version
function swapAnimations(){
  if($(window).width() < 800){
    var frameSrc = $('#animation').attr('data-mobile');
  }
  else{
    var frameSrc = $('#animation').attr('data-desktop');
  }
  if($('#animation').attr('src') != frameSrc) $('#animation').attr('src', frameSrc);
}
//Force container height (android fix)
function resizeBackground() {
    $("#animWrap").height($(window).height());
}
//Fire functions on load
$(document).ready(function(){
  swapAnimations();
  $('#rsvp').addClass('loaded');
  resizeBackground();
  myFrame.contentWindow.focus();
})
//Fire functions on window resize
$(window).resize(function(){
  swapAnimations();
  resizeBackground();
})

$('#burger').click(function(){
  $('body').toggleClass('open');
});

$('.final').click(function(){
  $('body').addClass('end');
})
