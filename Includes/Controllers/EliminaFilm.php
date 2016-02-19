<?php
include '../Models/Database.php';
$id = $_POST['id'];
$auth = new Database();
$controllo = $auth->EliminaFilm($id);
$controllo = $auth->EliminaFilmCarrelloUtente($id);

    header("Location: ../Views/homeAdmin.php");
?>

