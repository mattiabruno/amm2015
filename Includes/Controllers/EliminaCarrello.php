<?php
include '../Models/Database.php';
$id = $_POST['id'];
$id2 = $_POST['id2'];
$auth = new Database();
$controllo = $auth->EliminaCarrello($id);
$dati = $auth->QueryRecuperaDatiFilmCertoId($id2);
$magazzino = $dati['magazzino'];
$magazzino = $magazzino+1;
$controllo = $auth->ModificaFilm($id2,$dati['titolo'],$dati['durata'],$dati['prezzo'],$magazzino,$dati['descrizione'],$dati['url_immagine']);
header("Location: ../Views/carrello.php");
?>

