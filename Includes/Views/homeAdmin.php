<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../../Assets/Css/stile.css" rel="stylesheet" type="text/css">
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
	<div id="titolo">
	 <img src="../../Assets/Immagini/Titolo.jpg"/>  
	</div>    
    <div id="slideshow">  
      <img src="../../Assets/Immagini/sharknado2.jpg"/>  
      <img src="../../Assets/Immagini/american-sniper.jpg"/>  
      <img src="../../Assets/Immagini/kickass.jpg"/>  
     </div>   
     <div id="menu">
         <div id="bottone_logout">
		<img src="../../Assets/Immagini/Logout.png" border="0" 
                 onMouseOver="this.src='../../Assets/Immagini/Logout.jpg';" onMouseOut="this.src='../../Assets/Immagini/Logout.png';">
         </div>
    	 <div id="bottone_home">
                 <a href="index.php"><img style="margin-top:-4px;" src="../../Assets/Immagini/tasto-home.jpg";></a>
		 <img style="margin-left:10px; padding-bottom:5px;"  src="../../Assets/Immagini/Aggiungi1.jpg"
                 onMouseOver="this.src='../../Assets/Immagini/Aggiungi2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Aggiungi1.jpg';">
		 <img style="margin-left:10px; padding-bottom:5px;" src="../../Assets/Immagini/Modifica1.jpg"
                 onMouseOver="this.src='../../Assets/Immagini/Modifica2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Modifica1.jpg';">
		 <img style="margin-left:10px; padding-bottom:5px;" src="../../Assets/Immagini/Rimuovi1.jpg" 
                 onMouseOver="this.src='../../Assets/Immagini/Rimuovi2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Rimuovi1.jpg';">
		
     	 </div>
	
     <div id = "admin_contentuto">
     	
     </div>
</div>
<footer> 
<img src="../../Assets/Immagini/html5.jpg";> © Mattia Bruno - Progetto AMM 2015. <img src="../../Assets/Immagini/css3.jpg";>
</footer>
</body>


</html>