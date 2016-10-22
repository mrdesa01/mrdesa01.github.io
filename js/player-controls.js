// JavaScript Document
var mytrack = document.getElementById('mytrack');
var playButton = document.getElementById('playButton');
var muteButton = document.getElementById('muteButton');
var fullDuration = document.getElementById('fullDuration')
var currentTime = document.getElementById('currentTime')
var barSize = 900;
var bar = document.getElementById('defaultBar');
var progressBar = document.getElementById('progressBar');
var bolita = document.getElementById('bolita');
mytrack.addEventListener("loadedmetadata", changeDuration);




playButton.addEventListener('click',playOrPause,false);
muteButton.addEventListener('click',muteOrUnmute,false);
bar.addEventListener('click',clickedBar,false);


function intializePlayer(){

}
window.onload = intializePlayer;

function playOrPause(){
	if(!mytrack.paused && !mytrack.ended){
		mytrack.pause();
		playButton.style.backgroundImage = 'url(img/play.png)';
		window.clearInterval(updateTime);
		
	}
	else{
		mytrack.play();
		playButton.style.backgroundImage = 'url(img/pause.png)';
		updateTime = setInterval(update,500);
		
	}
}



function muteOrUnmute(){
	if (mytrack.muted == true){
		mytrack.muted = false;
	}
	else{
		mytrack.muted = true;
	}
}

 function changeDuration() { 
 var minutes = parseInt(mytrack.duration/60); 
 var seconds = pad(parseInt(mytrack.duration%60)); 
 fullDuration.innerHTML = minutes+":"+seconds; 
 }

function update (){
	if(!mytrack.ended){
 var playedminutes = parseInt(mytrack.currentTime/60); 
 var playedseconds = pad(parseInt(mytrack.currentTime%60)); 
		currentTime.innerHTML = playedminutes+":"+playedseconds; 
		
		var size =  parseInt(mytrack.currentTime*barSize/mytrack.duration);
		progressBar.style.width = size + "px";
		
		
	}
	else{
		currentTime.innerHTML = "0:00";
		playButton.style.backgroundImage = 'url(img/play.png)';
		progressBar.style.width =  "0px";
	
		window.clearInterval(updateTime);
		
	}
}

function clickedBar(e) {
	if(!mytrack.ended){
		var mouseX = e.pageX - bar.offsetLeft;
		var newtime = mouseX*mytrack.duration/barSize;
		
		mytrack.currentTime = newtime;
		progressBar.style.width = mouseX + 'px';
		 
	}
	
	}
	function pad(d){
		return (d <10) ? '0' + d.toString() : d.toString();
	}
	
	

	
	
	
