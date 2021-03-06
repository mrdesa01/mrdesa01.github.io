<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Radio Caribbean</title>
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
<link href="css/Music_player.css" rel="stylesheet" type="text/css" />
<link href="css/Style.css" rel="stylesheet" type="text/css" />
<link href="css/App.css" rel="stylesheet" type="text/css" />
<!-- informacion para qua Android y IOS  ---->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/959.css" rel="stylesheet" type="text/css" media="screen and (max-width: 959px)"/>
<link href="css/320.css" rel="stylesheet" type="text/css" media="screen and (max-width: 320px)"  />
<link href="css/640.css" rel="stylesheet" type="text/css" media="screen and (max-width: 640px)"  />
<!-- final de  informacion para qua Android y IOS  ---->
<script src="js/id3-minimized.js" type="text/javascript"></script>
<script type="application/javascript" src="../lib/fastclick.js"></script> 
<script type="application/javascript">
	window.addEventListener('load', function () {
		FastClick.attach(document.body);
	}, false);
</script>
<style>
div#load_screen{
	background: rgba(0,219,219,1);
background: -moz-linear-gradient(-45deg, rgba(0,219,219,1) 0%, rgba(0,95,158,1) 100%);
background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(0,219,219,1)), color-stop(100%, rgba(0,95,158,1)));
background: -webkit-linear-gradient(-45deg, rgba(0,219,219,1) 0%, rgba(0,95,158,1) 100%);
background: -o-linear-gradient(-45deg, rgba(0,219,219,1) 0%, rgba(0,95,158,1) 100%);
background: -ms-linear-gradient(-45deg, rgba(0,219,219,1) 0%, rgba(0,95,158,1) 100%);
background: linear-gradient(135deg, rgba(0,219,219,1) 0%, rgba(0,95,158,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00dbdb', endColorstr='#005f9e', GradientType=1 );
	opacity: 1;
	position: fixed;
    z-index:10;
	top: 0px;
	width: 100%;
	height: 1600px;
}
div#load_screen > div#loading{
	color:#FFF;
	width:120px;
	height:24px;
	margin: 300px auto;
}
</style>
<script>
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
</script> <!-- loading screen -->

<div id="overlay" > <!-- Overlay -->
   <button onmousedown="toggleOverlay()" id="bt-cerrar" ><h2>X</h2></button>
   <h1>Formulario Para ( EMAIL )</h1>
   <button onmousedown="toggleOverlay()" id="submit" ><img src="img/send_icon.png" width="40" height="38" /></button>
</div><!-- fin de overlay -->
</head>

<body>
<div id="load_screen"><div id="loading"><img src="js/bars.svg" width="80" alt=""></div></div>
 <script>
    
    /**
     * Loading the tags using XHR.
     */
    //sample.mp3 sits on your domain
    ID3.loadTags("#mp3", function() {
      showTags("#mp3");
    }, {
      tags: ["title","artist","album","picture"]
    });

 

    /**
     * Generic function to get the tags after they have been loaded.
     */
    function showTags(url) {
      var tags = ID3.getAllTags(url);
      console.log(tags);
      document.getElementById('title').textContent = tags.title || "";
      document.getElementById('artist').textContent = tags.artist || "";
      var image = tags.picture;
      if (image) {
        var base64String = "";
        for (var i = 0; i < image.data.length; i++) {
            base64String += String.fromCharCode(image.data[i]);
        }
        var base64 = "data:" + image.format + ";base64," +
                window.btoa(base64String);
        document.getElementById('picture').setAttribute('src',base64);
      } else {
        document.getElementById('picture').style.display = "none";
      }
    }
  </script>
 <!-- App---------------------------------------------------->
<div id="app_top_bar">
<img id="app_logo"src="img/white - logo.png" />
</div> 

<!----- Fin de la App----------------------------------------->         
<div id="top-player">
              <div id="side_music_title">
                 <div id="titulo" align="center"><!--<b>Title:</b>--><span id="title">...</span></div>
                 <div id="artista" align="center"><!--<b>Artist:</b>--><span id="artist">...</span></div>
              </div>
             
              <div id="side_prossesbar">
                 <div id="defaultBar">
                    <div id="progressBar"><div id="bolita"></div></div>
                 </div>
              </div>
              
              <div id="side_player_time">
                 <span id="currentTime">0:00</span>
                 <span id="fullDuration">0:00</span>
              </div>
              
              <div id="side_player_buttons">
                 <button type="button" id="muteButton"></button>
                 <button type="button" id="playButton"></button>
                 
              </div>
</div><!-- final de top player---->



<!--<div id="Chat"></div>-->


<div id="Horarios_bar">
   <img id="logo" height="80" width="150" src="img/white-name.png" />
   <div id="Horarios_op">
      <ul>
        <li><a href="inicio.php">Home</a></li>
        <li><a href="publicidad.php">Publicidad</a></li>
        <li><a href="Horarios.php">Horarios</a></li>
        <li><a href="about.asp" onmousedown="toggleOverlay()">Contact</a></li>
      </ul>
   </div>
   <div id="chat">
<script id="cid0020000136082029633" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 803px;height: 300px;">{"handle":"radiocaribbeanhn","arch":"js","styles":{"a":"333333","b":100,"c":"FFFFFF","d":"FFFFFF","k":"333333","l":"333333","m":"333333","n":"FFFFFF","p":"10","q":"333333","r":100,"pos":"br","cv":1,"cvbg":"333333","cvw":803,"cvh":24,"surl":0,"cnrs":"0.35","ticker":1,"fwtickm":1}}</script>
   </div>
</div>

 <div id="contenido_jax"><!--contenido-->
   </div><!--end of contenido-->



              
<div id="menu_app">
<button type="button" id="playButton_app" onclick="window.location.href='http://www.netyco.com/radio-x-internet/player/movil.php?surl=http%3A%2F%2F50.22.219.37%3A12256%2F%3B&title=Radio%2520Fm%20Impacto'"></button>
<div id="menu_app_left">
<ul>
   <li><a href="inicio.php"><img src="img/home.png" height="30px" width="30px" /></a></li>
   <li><a href="publicidad.php"><img src="img/publicidad.png" height="30px" width="30px" /></a></li>
</ul>
<div id="menu_app_right">
<ul>
   <li><a href="Horarios.php"><img src="img/Horarios.png" height="30px" width="30px" /></a></li>
   <li><a onmousedown="toggleOverlay()"><img src="img/Contactar.png" height="30px" width="30px" /></a></li>
</ul>
</div>
<div id="msj_chat">Cargando chat...</div>
</div>
</div>             
<audio id="mytrack">
  <source id="mp3"src="http://50.22.219.37:12256/;"/>
</audio> 
<script src="js/jquery.min.js"></script>
<script src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/player-controls.js"></script>    
<script src="js/load.js"></script>        
</body>
</html>