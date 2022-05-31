$(document).ready(function(){
  var $clock=$('.clock');
  var gameDate=$clock.attr('data-targetdate');


  setInterval(function(){
    $.ajax({
      url: './components/countdown-clock.php',
      data: {
        g_date: gameDate
      },
      type: "GET",
      success: function(response){
        $clock.html(response);
      }
    });
  },1000);

});
