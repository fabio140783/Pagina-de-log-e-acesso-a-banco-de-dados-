<?php
//Acesso direto e direcionamento a pagina de log 
if(!isset($_SESSION)){
    session_start();
}if(!isset($_SESSION['id'])){
    die('Você não pode acessar esta pagina, logar o usuario.<p><a href=\"index.php\">Entrar</a></p>');
}

?>