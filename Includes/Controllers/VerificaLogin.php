<?php
include '../Models/Database.php';
$nome = $_POST['nome'];
$password = $_POST['password'];
$auth = new Database();
$controllo = $auth->VerificaLogin($nome,$password);
	if($controllo == false){
		header("Location: ../Views/homeErrore.php");
	}
	else
	{
		$_SESSION['autorizzato'] = 1;
		$_SESSION['utenti_id'] = $controllo['id_utenti'];
		if($controllo['id_utenti'] == 1){
			header("Location: ../Views/homeAdmin.php");
		}else if($controllo['id_utenti'] == 2){
			header("Location: ../Views/homeUtente.php");
		}	
	}
?>

