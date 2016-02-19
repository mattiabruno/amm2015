<?php
include '../Models/Database.php';
$auth = new Database();
$controllo = $auth->Compra();
header("Location:../Views/spedizione.php");
?>

