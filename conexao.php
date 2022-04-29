<?php
//Acesso ao banco de dados criado "$database = login"
$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli= new mysqli($host, $usuario, $senha, $database);

if($mysqli -> error){
    die("falha na conectar ao banco de dados:" . $mysqli -> error);
}

?>
