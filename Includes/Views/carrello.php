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
                 <a href="homeUtente.php"><img style="margin-top:-4px;" src="../../Assets/Immagini/tasto-home.jpg";></a>
				 <a href="carrello.php"><img style="margin-left:10px; padding-bottom:5px;"  src="../../Assets/Immagini/Carrello2.jpg"
                 onMouseOver="this.src='../../Assets/Immagini/Carrello1.jpg';" onMouseOut="this.src='../../Assets/Immagini/Carrello2.jpg';"></a>
     	 </div>
			<div id="contentcarrello">
				<?php
				include '../Models/Database.php';
				$var = new Database();
				$nfilm = $var->QueryNumeroCarrello();
				$tot = 0;
				for($i=0;$i<$nfilm; $i++)
				{
					$dati = $var->QueryRecuperaDatiCarrello($i);
					$tot = $tot + $dati['prezzo'];
					echo '
					<div id="tutto">
							<div id="immaginecarrello">
								<img src="'. $dati['url_immagine'] .'" alt="'. $dati['titolo'] .'"/>
							</div>
							<div id="tutto1">
								<div id="testocarrello">
										<center><h1>'. $dati['titolo'] .'</h1><br>
										<b>Prezzo: </b>'. $dati['prezzo'] .' €<br>
								</div>
								<div id="bottoneaggiungi">
									<form id ="elimina" action="../Controllers/EliminaCarrello.php" method="post">
											<input type="hidden" id="id" name="id" value="'. $dati['id_carrello'] .'">
											<input type="hidden" id="id2" name="id2" value="'. $dati['film_id'] .'">;
											<input style="text-align:center; background: #00c0FF; color: #fff; padding:10px; border-radius:3px; font-size:20px; width:300px;"
											name="Rimuovi" type="submit" value="RIMUOVI DAL CARRELLO" id="submit" />
									</form>
								</div>
							</div>	
					</div>';
				}
			?>
			</div>
			<form id ="elimina" action="../Controllers/Compra.php" method="post">
					<center>
					<h2>TOTALE: <?php echo $tot; ?>€</h2>
                    <input style="margin-top:30px; margin-bottom:30px; text-align:center; background: #00c0FF; color: #fff; padding:10px; border-radius:3px; font-size:20px; width:300px;"
							name="Compra" type="submit" <?php if($tot == 0){ echo ' disabled="disabled"'; } ?> value="COMPRA" id="submit" />
					</center>
			</form>
		</div>
<center><footer> 
<img src="../../Assets/Immagini/html5.jpg";> © Mattia Bruno - Progetto AMM 2015. <img src="../../Assets/Immagini/css3.jpg";>
</footer></center>
</div>

</body>


</html>


