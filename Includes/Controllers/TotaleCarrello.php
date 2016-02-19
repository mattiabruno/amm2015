<?php
include '../Models/Database.php';
$auth = new Database();
$controllo = $auth->TotaleCarrello();
header("Location: ../Views/carrello.php");
?>

