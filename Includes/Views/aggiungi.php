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
		<img src="../../Assets/Immagini/sharknado2.jpg"/>  
		<img src="../../Assets/Immagini/american-sniper.jpg"/>  
		<img src="../../Assets/Immagini/kickass.jpg"/>  
	</div>   
	<div id="menu">
		<div id="bottone_logout">
			<a href="../Controllers/Logout.php"><img src="../../Assets/Immagini/Logout.png" border="0" 
			onMouseOver="this.src='../../Assets/Immagini/Logout.jpg';" onMouseOut="this.src='../../Assets/Immagini/Logout.png';"></a>
        </div>
    	<div id="bottone_home">
			<a href="homeAdmin.php"><img style="margin-top:-4px;" src="../../Assets/Immagini/tasto-home.jpg";></a>
			<a href="aggiungi.php"><img style="margin-left:10px; padding-bottom:5px;"  src="../../Assets/Immagini/Aggiungi2.jpg"
			onMouseOver="this.src='../../Assets/Immagini/Aggiungi1.jpg';" onMouseOut="this.src='../../Assets/Immagini/Aggiungi2.jpg';"></a>
			<a href="modifica.php"><img style="margin-left:10px; padding-bottom:5px;" src="../../Assets/Immagini/Modifica1.jpg"
			onMouseOver="this.src='../../Assets/Immagini/Modifica2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Modifica1.jpg';"></a>
			<a href="elimina.php"><img style="margin-left:10px; padding-bottom:5px;" src="../../Assets/Immagini/Rimuovi1.jpg" 
			onMouseOver="this.src='../../Assets/Immagini/Rimuovi2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Rimuovi1.jpg';"></a>
		</div>
	</div>
	<div id="contenuto">
		<form id="pannello-aggiungi" action="../Controllers/AggiungiFilm.php" method="post">
			<?php
			include '../Models/Database.php';
			$var = new Database();
			echo '<form id="pannello-aggiungi" action="../Controllers/AggiungiFilm.php" method="post">
				<!-- titolo form -->
				<h1>Aggiungi Film</h1><br>
				<!-- campo ed etichetta Titolo -->   
				<label for="Titolo" id="Titolo">Titolo
				<input type="text" name="Titolo" id="Titolo" required/><br>
				</label>
				<!-- campo ed etichetta Descrizione -->  
				<label for="Descrizione" id="Descrizione">Descrizione (max:2000 caratteri)<br>
				<textarea name="Descrizione" rows="10" cols="100" required ></textarea><br>
				</label>
				<!-- campo ed etichetta Url -->  
				<label for="Url" id="Url">Url
				<input type="text" name="Url" id="Url" required/><b>
				</label>
				<!-- campo ed etichetta Durata -->   
				<label for="Durata" id="Durata">Durata
				 <input type="text" name="Durata" id="Durata" required/><br>
				</label>
				<!-- campo ed etichetta Prezzo -->   
				<label for="Prezzo" id="Prezzo">Prezzo
				 <input type="text" name="Prezzo" id="Prezzo" required/><br>
				</label>
				<!-- campo ed etichetta Magazzino -->   
				<label for="Magazzino" id="Magazzino">Magazzino
				 <input type="text" name="Magazzino" id="Magazzino" required/><br>
				</label>
				<!-- tasto di invio -->
				<input style="margin-top:30px; text-align:center; background: #00c0FF; color: #fff; padding-top:15px; padding-left:50px;
				padding-bottom:15px; padding-right:50px; border-radius:3px; font-size:20px; margin-left:235px;"
				name="Aggiungi" type="submit" value="AGGIUNGI" id="submit" />
				</form>'; 
			?>
		</form>   
	</div>
	<center><footer> 
		<img src="../../Assets/Immagini/html5.jpg";> © Mattia Bruno - Progetto AMM 2015. <img src="../../Assets/Immagini/css3.jpg";>
	</footer></center>
</div>
</body>
</html>
