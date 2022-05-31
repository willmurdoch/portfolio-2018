//Global vars
var scrollDir, isScrolling = false, mySpot = '', myCanvas, isLoaded = false;
var frameBody = $(window.parent.document).find('body');

//Hide scroll prompt at the bottom of the screen
function hidePrompt(){
  frameBody.find('#scrollPrompt').addClass('out');
  frameBody.find('#bgLogo').addClass('out');
}

//Frame navigation buttons, myFrame corresponds to frame you want in Adobe Animate file
$(window.parent.document).delegate('[data-frame]', 'click', function(e){
  e.preventDefault();
  frameBody.removeClass('open');
  var myFrame = $(this).attr('data-frame');
  myCanvas.gotoAndStop(myFrame);
  myClip.gotoAndStop(0);
  isScrolling = true;
  scrollDir = 'down';
  hidePrompt();
})

$('#lockups').html(frameBody.find('#lockups').html());


//Toggle current text lockup based on animation spot, variable mySpot set in Adobe Animate file
setInterval(function(){
  $('.' + mySpot).addClass('current').siblings().removeClass('current');
  if(isLoaded == false) startScene();
  if(mySpot == 'thanks' && thisScroll != 'up' && !frameBody.hasClass('end')){
    frameBody.addClass('end');
  }
  else if(mySpot !== 'thanks' && frameBody.hasClass('end')){
    frameBody.removeClass('end');
  }
}, 250);

//Desktop scroll binding
var scrollThrottle = false;
setInterval(function(){
  scrollThrottle = false;
}, 1500);
var thisScroll;
window.addEventListener('wheel', function(e){
  if(scrollThrottle == false && scrollDir == false){
    isScrolling = scrollThrottle = true;
    if(e.deltaY > 0) scrollDir = thisScroll = 'down';
    else scrollDir = thisScroll = 'up';
    hidePrompt();
  }
});

//Arrow key bindings
function scrollScene(dir){
  if(scrollThrottle == false && scrollDir == false){
    isScrolling = scrollThrottle = true;
    if(dir == 'down') scrollDir = 'down';
    else scrollDir = 'up';
    hidePrompt();
  }
}
window.addEventListener("keydown", function (e) {
  switch(e.key){
    case "Down": // IE/Edge specific value
      scrollScene('down');
    case "ArrowDown":
      scrollScene('down');
      break;
    case "Up": // IE/Edge specific value
      scrollScene('up');
    case "ArrowUp":
      scrollScene('up');
      break;
  }
});

//Mobile swipe binding
if("ontouchstart" in window){
  var startTouch, endTouch;
  window.addEventListener('touchstart', function(e){
    startTouch = e.touches[0].clientY;
  });
  window.addEventListener('touchend', function(e){
    var endTouch = e.changedTouches[0].clientY;
    isScrolling = true;
    if(startTouch > endTouch + 50) scrollDir = 'down';
    else if(startTouch < endTouch - 50) scrollDir = 'up';
    hidePrompt();
  });
}

//What happens when you scroll
var myClip, fullScene, scrollDir;
function startScene(){
	fullScene = myClip.parent;
	var labels = myClip.labels;
  isLoaded = true;
  createjs.Ticker.timingMode = createjs.Ticker.RAF_SYNCHED;
  createjs.Ticker.setFPS(30);

	//Check current frame's label (used to separate animations)
	function getLabel(myClip) {
		var currentLabel;
		var currentPosition = myClip.currentFrame;
		myClip.labels.forEach(function( label, index ){
			if (label.position <= currentPosition) currentLabel = index;
		});
		return currentLabel;
	}

	//Loop to check if we should be animating
	setInterval(function(){
    if(isScrolling == true){
  		if(scrollDir == 'up'){
  			playScene('up');
  		}
  		else if(scrollDir == 'down'){
  			playScene('down');
  		}
    }
		if(scrollDir != false) scrollDir = false;
	}, 100);

	//Play scene
	var currentLabel = labels[getLabel(myClip)], lastLabel = labels[getLabel(myClip)];
	function playScene(dir){
    isScrolling = false;
		labels = myClip.labels;
		currentLabel = labels[getLabel(myClip)];
		if(currentLabel == lastLabel){
      //If there's already a binding, remove it
			if(createjs.Ticker.hasEventListener('tick')) createjs.Ticker.removeAllEventListeners();
			//Scroll down
			if(dir == 'down') createjs.Ticker.addEventListener('tick', forwardScrub.bind(this));
			//Scroll up
			else createjs.Ticker.addEventListener('tick', reverseScrub.bind(this));
		}
		else{
			lastLabel = currentLabel;
			playScene(dir);
		}
	}
  //Animate forwards
	function forwardScrub(e){
		var nextFrame = labels[getLabel(myClip) + 1];
		if(myClip.currentFrame < myClip.totalFrames && nextFrame && currentLabel == lastLabel){
			myClip.gotoAndStop(myClip.currentFrame + 1);
			if(myClip.currentFrame >= nextFrame.position){
				myClip.gotoAndStop(nextFrame.position);
				createjs.Ticker.removeAllEventListeners();
			}
			if(myClip.currentFrame + 1 >= myClip.totalFrames && fullScene.currentFrame + 1 < fullScene.totalFrames){
				fullScene.gotoAndStop(fullScene.currentFrame + 1);
				playScene('down');
			}
			stage.update();
		}
	}
  //Animate in reverse
	function reverseScrub(e){
		var currentFrame = labels[getLabel(myClip)];
		if(currentLabel == lastLabel){
			myClip.gotoAndStop(myClip.currentFrame - 1);
      if(frameBody.hasClass('end')) frameBody.removeClass('end');
			if(myClip.currentFrame == currentFrame.position){
				myClip.gotoAndStop(currentFrame.position);
				createjs.Ticker.removeAllEventListeners();
			}
			if(myClip.currentFrame <= labels[0].position + 1 && fullScene.currentFrame != 1){
				fullScene.gotoAndStop(fullScene.currentFrame - 1);
				myClip.gotoAndStop(myClip.totalFrames - 2);
				playScene('up');
			}
			stage.update();
		}
	}
}
