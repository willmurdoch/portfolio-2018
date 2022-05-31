var myLogo = document.getElementById('hero');

var nextParticle;
function generateParticles(){
  if(window.outerWidth > 800){
    //Generate particles
    nextParticle = new NextParticle({
      image: document.all.hero,
      width: myLogo.width,
      height: myLogo.height,
      minWidth: myLogo.width,
      minHeight: myLogo.height,
      maxWidth: myLogo.width,
      maxHeight: myLogo.height,
      gravity: 0.1,
      noise: 3,
      particleGap: 4,
      mouseForce: 2,
      layerCount: 2
    });
  }
  else{
    nextParticle = new NextParticle({
      image: document.all.hero,
      width: myLogo.width,
      height: myLogo.height,
      minWidth: myLogo.width,
      minHeight: myLogo.height,
      maxWidth: myLogo.width,
      maxHeight: myLogo.height,
      gravity: 0.1,
      noise: 3,
      particleGap: 2,
      mouseForce: 2,
      layerCount: 2
    });
  }
}
generateParticles();

var checkStart = setInterval(function(){
  if(document.querySelectorAll('.heroWrap canvas').length){
    document.body.classList.add('fadeIn');
    scrollAnims(window.scrollY);
    nextParticle.width = myLogo.width;
    nextParticle.height = myLogo.height;
    nextParticle.start();
    clearInterval(checkStart);
  }
}, 500);


//Calculate position on resize
window.onresize = function() {
  nextParticle.width = myLogo.width;
  nextParticle.height = myLogo.height;
  nextParticle.start();
};

var lastScroll = 0;
var ticking = false;

var animTriggers = document.querySelectorAll('[data-animated]');

function scrollAnims(scrollPos) {
  // Do something with the scroll position
  if(scrollPos > 150) document.getElementById('mainNav').classList.add('sticky');
  else document.getElementById('mainNav').classList.remove('sticky');

  if(scrollPos == 0){
    if(document.getElementById('introParagraph').getBoundingClientRect().top < window.outerHeight/2){
      document.getElementById('introParagraph').classList.add('animated');
    }
    document.getElementById('heroText').classList.add('animated');
  }

  if(scrollPos > window.outerHeight) document.getElementById('scrollPrompt').classList.add('out');
  else document.getElementById('scrollPrompt').classList.remove('out');

  Array.prototype.forEach.call(animTriggers, function(animTrigger){
    if(animTrigger.getBoundingClientRect().top < window.outerHeight/2 && document.body.classList.contains('fadeIn')){
      animTrigger.classList.add('animated');
    }
  });
}

document.querySelectorAll('.gridItem img').forEach(item => {
  item.addEventListener('mouseover', event => {
    var myRand = Math.floor(Math.random()*100000);
    var mySrc = item.src;
    item.src = mySrc.replace('.png', '.gif') + '?' + myRand;

  })
  item.addEventListener('mouseout', event => {
    var oldSrc = item.src.split('?')[0];
    item.src = oldSrc.replace('.gif', '.png');
  })
})

window.addEventListener('scroll', function(e) {
  lastScroll = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      scrollAnims(lastScroll);
      ticking = false;
    });
    ticking = true;
  }
});
