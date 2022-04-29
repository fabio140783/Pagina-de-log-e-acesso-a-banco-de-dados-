<?php
//proteção para não ocorrencia de acesso direto 
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel </title>
</head>
<body>
    <!--pagina02 direcionamento apos acesso-->
    <h1>bem vindo </h1>
    <h2><p>Você esta na pagina web </p></h2>
    <?php  
    echo "Olá " .$_SESSION['nome'];
     ?>
     <p>
    <button><a href="logout.php">Sair</a> </button>  
    </p>
   
    
</body>
</html>