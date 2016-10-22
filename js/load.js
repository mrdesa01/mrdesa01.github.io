// JavaScript Document
$(document).ready(function(){
	$('#contenido_jax').load('inicio.php');
});
$('a').click(function(){
	var page = $(this).attr('href');
	$("#contenido_jax").load(page);
	return false;
});
$('#ass').click(function(){
	var page = $(this).attr('href');
	$("#contenido_jax").load(page);
	return false;
});
$("img").mousedown(function(e){
    e.preventDefault()
});

function toggleOverlay(){
	var overlay = document.getElementById('overlay');
	var specialBox = document.getElementById('specialBox');
	//overlay.style.opacity = .8;//
	if(overlay.style.display == "block"){
		overlay.style.display = "none";
		specialBox.style.display = "none";
	} else {
		overlay.style.display = "block";
		specialBox.style.display = "block";
	}
}


