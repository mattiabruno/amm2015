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
		<div id="bottone_home">
			<a href="home.php"><img style="margin-top:-4px;" src="../../Assets/Immagini/tasto-home.jpg";></a>
			<a href="infoprogetto.php"><img style="margin-left:10px; padding-bottom:5px;" src="../../Assets/Immagini/Informazioni1.jpg" border="0" 
			onMouseOver="this.src='../../Assets/Immagini/Informazioni2.jpg';" onMouseOut="this.src='../../Assets/Immagini/Informazioni1.jpg';"></a>
		</div>
	</div>
	<div id="contenuto">
     	 <form id="panello-login" action="../Controllers/VerificaLogin.php" method="post">
			<!-- titolo form -->
				<h1>Accesso Utenti</h1>
			<!-- campo ed etichetta username -->   
			<label for="nome" id="nome">Username
				<input type="text" name="nome" id="nome" required/>
			</label>
			<!-- campo ed etichetta password -->  
			<label for="password" id="password">Password
			  <input type="password" name="password" id="password" required />
			</label>
			<!-- tasto di invio -->
			<input style="margin-top:30px; text-align:center; background: #00c0FF; color: #fff; padding-top:15px; padding-left:50px; padding-bottom:15px; padding-right:50px; border-radius:3px; font-size:20px; margin-left:235px;" name="Login" type="submit" value="LOGIN" id="submit" value="Login" id="submit" />
			<p style=" color: #fff; text-align:center; margin-top:40px;"> Admim - USERNAME : admin / PASSWORD : admin </p>
			<p style=" color: #fff; text-align:center;"> Utente - USERNAME : utente / PASSWORD : utente </p>
		</form>    
	</div>
	<center><footer> 
		<img src="../../Assets/Immagini/html5.jpg";> © Mattia Bruno - Progetto AMM 2015. <img src="../../Assets/Immagini/css3.jpg";>
	</footer></center>
</div>
</body>
</html>
