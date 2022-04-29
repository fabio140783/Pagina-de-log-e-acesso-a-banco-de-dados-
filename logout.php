<?php
//Sair com direcionamento a pagina de log
if(!isset($_SESSION)){
    session_start();
}
session_destroy();
header("location: index.php");
?>