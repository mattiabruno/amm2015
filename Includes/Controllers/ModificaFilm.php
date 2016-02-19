<?php
include '../Models/Database.php';
$id = $_POST['id'];
$titolo = $_POST['Titolo'];
$durata = $_POST['Durata'];
$prezzo = $_POST['Prezzo'];
$magazzino = $_POST['Magazzino'];
$descrizione = $_POST['Descrizione'];
$url_immagine = $_POST['Url'];

$titolo= str_replace("'"," ",$titolo);
$descrizione = str_replace("'"," ",$descrizione);

$auth = new Database();
$controllo = $auth->ModificaFilm($id,$titolo,$durata,$prezzo,$magazzino,$descrizione,$url_immagine);
header("Location: ../Views/homeAdmin.php");
?>