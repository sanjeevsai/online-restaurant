
	function logout()
	{
		window.open("mainpage.html","_self");
	}
	function scrollWin(x, y) {
		window.scrollBy(x, y);
	}

	
	
	
var x = 0;
var d = 40;
var speed = 5;
function scrollingeffect(div) {
	var y = window.pageYOffset;
	var targetY = document.getElementById(div).offsetTop;
	var bodyHeight = document.body.offsetHeight;
	var yposition = y + window.innerHeight;
	var animator = setTimeout('scrollingeffect(\''+div+'\')',speed);
	if(yposition > bodyHeight){
		clearTimeout(animator);
	} else {
		if(y < targetY-d){
		    x = y+d;
		    window.scroll(0, x);
	    } else {
		    clearTimeout(animator);
	    }
	}
}
function goback(div){
	var y = window.pageYOffset;
    var targetY = document.getElementById(div).offsetTop;
	var animator = setTimeout('goback(\''+div+'\')',-10	);
	if(y > targetY){
		x = y-d;
		window.scroll(0, x);
	} else {
		clearTimeout(animator);
	}
}