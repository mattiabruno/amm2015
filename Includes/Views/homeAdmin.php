<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../../Assets/Css/stile.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>  
<title>Compra DvD</title>
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
		<img src="../../Assets/Immagini/50sfumature.jpg"/>  
		<img src="../../Assets/Immagini/american-sniper.jpg"/>  
		<img src="../../Assets/Immagini/hungergames.jpg"/>  
	</div>   
	<div id="menu">
		<div id="bottone_logout">
			<a href="../Controllers/Logout.php"><img src="../../Assets/Immagini/Logout.png" border="0" 
			onMouseOver="this.src='../../Assets/Immagini/Logout.jpg';" onMouseOut="this.src='../../Assets/Immagini/Logout.png';"></a>
		</div>
		<div id="bottone_home">
			<a href="homeAdmin.php"><img style="margin-top:-4px;" src="../../Assets/Immagini/tasto-home.jpg";></a>
			<a href="aggiungi.php"><img style="margin-left:10px; padding-bottom:5px;"  src="../../Assets/Immagini/Aggiungi1.jpg"
			onMouseOver="this.src='../../Assets/Immagini/Aggiungi2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Aggiungi1.jpg';"></a>
			<a href="modifica.php"><img style="margin-left:10px; padding-bottom:5px;" src="../../Assets/Immagini/Modifica1.jpg"
			onMouseOver="this.src='../../Assets/Immagini/Modifica2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Modifica1.jpg';"></a>
			<a href="elimina.php"><img style="margin-left:10px; padding-bottom:5px;" src="../../Assets/Immagini/Rimuovi1.jpg" 
			onMouseOver="this.src='../../Assets/Immagini/Rimuovi2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Rimuovi1.jpg';"></a>
		</div>
	</div>
	<div id="content">
		<?php
			include '../Models/Database.php';
			$var = new Database();
			$nfilm = $var->QueryNumeroFilm();
			for($i=0;$i<$nfilm; $i++)
			{
				$dati = $var->QueryRecuperaDatiFilm($i);
				echo '
				<div id="immagine">
					<img src="'. $dati['url_immagine'] .'" alt="'. $dati['titolo'] .'"/>
					<div id="testo">
						<center><h1>'. $dati['titolo'] .'</h1><br>
						<b>Durata: </b>'. $dati['durata'] .' minuti.<br>
						<b>Prezzo: </b>'. $dati['prezzo'] .' €<br>
						<b>Magazzino: </b>'. $dati['magazzino'] .'</center><br>
						<b>Descrizione: </b> '. $dati['descrizione'] .'
					</div>
				</div>';
			}
		?>
	</div>
	<center><footer> 
		<img src="../../Assets/Immagini/html5.jpg";> © Mattia Bruno - Progetto AMM 2015. <img src="../../Assets/Immagini/css3.jpg";>
	</footer></center>
</div>
</body>
</html>
