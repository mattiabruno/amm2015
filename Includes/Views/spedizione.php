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
    <div id="slideshow">  
      <img src="../../Assets/Immagini/fastefurios7.jpg"/>  
      <img src="../../Assets/Immagini/sharknado2.jpg"/>  
      <img src="../../Assets/Immagini/kickass.jpg"/>  
     </div> 
      
     <div id="menu">
         <div id="bottone_logout">
			<a href="../Controllers/Logout.php"><img src="../../Assets/Immagini/Logout.png" border="0" 
            onMouseOver="this.src='../../Assets/Immagini/Logout.jpg';" onMouseOut="this.src='../../Assets/Immagini/Logout.png';"></a>
         </div>
    	 <div id="bottone_home">
                 <a href="homeUtente.php"><img style="margin-top:-4px;" src="../../Assets/Immagini/tasto-home.jpg";></a>
				 <a href="carrello.php"><img style="margin-left:10px; padding-bottom:5px;"  src="../../Assets/Immagini/Carrello1.jpg"
                 onMouseOver="this.src='../../Assets/Immagini/Carrello2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Carrello1.jpg';"></a>
     	 </div>
	 </div>
		<div id="content">
				<div id="immagine1">
					<img src="../../Assets/Immagini/spedizioni.jpg"/>
					<div id="testo1">
						<br><br><br><br>
						<center><b>Gentile cliente il suo ordine è andato a buon fine. Premere il tasto home per tornare alla lista dei film disponibili.</b></center>
					</div>
				</div>
		</div>
	<center><footer> 
	<img src="../../Assets/Immagini/html5.jpg";> © Mattia Bruno - Progetto AMM 2015. <img src="../../Assets/Immagini/css3.jpg";>
	</footer></center>
</div>

</body>


</html>

