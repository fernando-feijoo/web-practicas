<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Reproducción archivos m3u8</title>
<script src="http://jwpsrv.com/library/ejuoyqCsEeK4ayIACpYGxA.js"></script>
<style type="text/css"> 
body{bgcolor:#f0f0f0;}
#reproductor_aspect{display: none;}
#reproductor_jwpsrv{position: absolute; top: 0px; z-index: 10;}
#reproductor_wrapper{position: relative; display: block; width: 700px; height: 400px;}
</style>
<script>// <![CDATA[
//Key para el reproductor. Es posible que sea necesario registrarse en la web de JWPlayer como desarrollador y solicitar una (o eso es lo que había que hacer antes)
jwplayer.key="6RfMdMqZkkH88h026pcTaaEtxNCWrhiF6ACoxKXjjiI=";
// ]]></script>
</head>
<body>
<div id="reproductor_wrapper">
  <object type="application/x-shockwave-flash" data="http://p.jwpcdn.com/6/8/jwplayer.flash.swf" width="100%" height="100%" bgcolor="#000000" id="reproductor" name="reproductor" tabindex="0">
    <param name="allowfullscreen" value="true">
    <param name="allowscriptaccess" value="always">
    <param name="seamlesstabbing" value="true">
    <param name="wmode" value="opaque">
  </object>
  <div id="reproductor_aspect"></div>
  <div id="reproductor_jwpsrv"></div>
</div>
<script>// <![CDATA[
jwplayer('reproductor').setup({
    // La URL que envía el formulario la vamos a cargar mediante php y GET
    file: "<?php echo $_GET["urlstreaming"];?>",
    width: "700",
    skin: "five",
    height: "400",
    title: 'Reproducción desde URL',
    image: "",
    logo: {
    file: "",
    position: 'top-right',
    margin: '0',
    link: ""
    },
    stretching: "fill",
    autostart: "true",
    abouttext: '',
    aboutlink: '',
  });
// ]]></script>
<span>Se va a reproducir la URL:</span>
<p>
<!-- Este textarea nos va a mostrar la URL que se va a reproducir. También nos va a mostrar un mensaje si no hay ninguna URL para la reproducción-->
<textarea placeholder="<?php if(empty($_GET["urlstreaming"])){echo 'SIN URL PARA REPRODUCIR';}else{ echo $_GET["urlstreaming"];}?>" cols="95" rows="1" readonly></textarea>
</p>
<!-- Formulario en el que se va a enviar la URL a reproducir-->
<form action="index.php" method="get" name="formu" id="formu" 
      onsubmit="return jwplayer()">
   URL a reproducir: <input type="text" name="urlstreaming" value=""><br>
   <input type="submit" value="   Enviar   ">
</form>
 
</body>
</html>