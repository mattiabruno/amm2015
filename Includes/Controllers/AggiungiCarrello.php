<?php
include '../Models/Database.php';
$id = $_POST['id'];
$auth = new Database();
$controllo = $auth->AggiungiCarrello($id);
    if($controllo == false)
    {
        /*j ajax per errore*/
    }
$dati = $auth->QueryRecuperaDatiFilmCertoId($id);
$magazzino = $dati['magazzino'];
$magazzino = $magazzino-1;
$controllo = $auth->ModificaFilm($id,$dati['titolo'],$dati['durata'],$dati['prezzo'],$magazzino,$dati['descrizione'],$dati['url_immagine']);
header("Location: ../Views/carrello.php");
?>

