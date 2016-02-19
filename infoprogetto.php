<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="stile.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>  
<title>Noleggio DvD</title>

<!-- Script Slideshow -->
<script>  
$(function(){  
    $('#slideshow img:gt(0)').hide();  
    setInterval(function(){$('#slideshow :first-child').fadeOut(2000).next('img').fadeIn(2000).end().appendTo('#slideshow');}, 3000);  
});  
</script>  
<!-- Fine Script Slideshow -->
</head>

<body>
<div id="sfondo_centrale">
    <div id="slideshow">  
      <img src="Immagini/sharknado2.jpg"/>  
      <img src="Immagini/american-sniper.jpg"/>  
      <img src="Immagini/kickass.jpg"/>  
     </div> 
      
     <div id="menu">
         <div id="bottone_login">
         <a href="index.php"><img src="Immagini/login1.png" border="0" alt="Login" onMouseOver="this.src='Immagini/login2.png';" onMouseOut="this.src='Immagini/login1.png';"</a>
         </div>
    	 <div id="bottone_home">
                 <a href="index.php"><img style="margin-top:-4px;" src="Immagini/tasto-home.jpg";></a>
                 <a href="infoprogetto.html"><img style="margin-left:10px; padding-bottom:5px;" src="Immagini/pulsante-info1.jpg" border="0" 
                 onMouseOver="this.src='Immagini/pulsante-info.jpg';" onMouseOut="this.src='Immagini/pulsante-info1.jpg';"></a>
     	 </div>
     
     <div id="contenuto">
     	PORCODIO.
     </div>
     
</div>
<footer> 
<img src="Immagini/html5.jpg";> © Mattia Bruno - Progetto AMM 2015. <img src="Immagini/css3.jpg";>
</footer>
</body>


</html>
