<?php
include '../Models/Database.php';
$id = $_POST['id'];
$auth = new Database();
$controllo = $auth->AggiornaNumeroProdotti($id);
    if($controllo == false)
    {
        /*j ajax per errore*/
    }
header("Location: ../Views/carrello.php");
    
?>

