$('.desktop').click(function(){
  $(this).removeClass('out').toggleClass('in').siblings().toggleClass('out').removeClass('in');
});
$('.mobile').click(function(){
  $(this).removeClass('out').toggleClass('in').siblings().toggleClass('out').removeClass('in');
});
