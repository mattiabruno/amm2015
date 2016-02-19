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
<!-- JAJAX -->
<script>
function showFilm(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
		
        xmlhttp.open("GET","getfilm.php?id="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<div id="sfondo_centrale">  
    <div id="slideshow">  
		<img src="../../Assets/Immagini/suburra.jpg"/>  
		<img src="../../Assets/Immagini/starwars.jpg"/>  
		<img src="../../Assets/Immagini/american-sniper.jpg"/>  
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
			<a href="elimina.php"><img style="margin-left:10px; padding-bottom:5px;" src="../../Assets/Immagini/Rimuovi2.jpg" 
			onMouseOver="this.src='../../Assets/Immagini/Rimuovi1.jpg';" onMouseOut="this.src='../../Assets/Immagini/Rimuovi2.jpg';"></a>
		</div>
	</div>
	<div id = "contenuto">
		<form id="pannello-elimina" action="../Controllers/EliminaFilm.php" method="post">
			<!-- titolo form -->
			<h1>&nbsp;&nbsp;&nbsp;&nbsp;Seleziona il Film da eliminare</h1><br>
			<!-- SELECTBOX -->
			<select id="id" name="id" onchange="showFilm(this.value)">
			<?php
				include '../Models/Database.php';
				$var = new Database();
				$nfilm = $var->QueryNumeroFilm();
				echo '<option value="'. Seleziona un film .'"</option>';
				for($i=0;$i<$nfilm; $i++)
				{
					$dati = $var->QueryRecuperaDatiFilm($i);
					echo '<option value="'. $dati['id_film'] .'">'. $dati['titolo'] .'</option>	';
				}
			?>
			</select><br>
			<!-- tasto di invio -->
			<input style="margin-top:30px; text-align:center; background: #00c0FF; color: #fff; padding-top:15px;padding-left:50px;
			padding-bottom:15px; padding-right:50px; border-radius:3px; font-size:20px; margin-left:235px;"
			name="Elimina" type="submit" value="ELIMINA" id="submit" value="Elimina" />
		</form>   
    </div>
	<div id = "txtHint">
				
	</div>
	<center><footer> 
	<img src="../../Assets/Immagini/html5.jpg";> © Mattia Bruno - Progetto AMM 2015. <img src="../../Assets/Immagini/css3.jpg";>
	</footer></center>
</div>
</body>
</html>
