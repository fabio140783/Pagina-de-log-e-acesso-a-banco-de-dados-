<?php
//Inclusão do banco de dados 
include("conexao.php");
if (isset($_POST["email"])||isset($_POST["senha"])){
    if(strlen($_POST["email"])==0){
        echo "Preencha seu email !";
    }elseif(strlen($_POST["senha"])==0){
            echo"<h2>Preencha sua senha !</h2>";
        }else{
            //codigo limpar os campos preenchidos
            $email=$mysqli->real_escape_string($_POST["email"]);
            $senha=$mysqli->real_escape_string($_POST["senha"]);
            $sql_code="SELECT * FROM usuários WHERE email='$email'AND senha='$senha'";
            $sql_query=$mysqli->query($sql_code) or die ("Falha na execução SQL ".$mysqli->error);
            $quantidade= $sql_query->num_rows;
            if ($quantidade==1){
                $usuario=$sql_query->fetch_assoc();
                if (!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['id']=$usuario['id'];
                $_SESSION['nome']=$usuario['nome'];
                header("location: painel.php");
            }else{
                echo "Falha ao logar! Email ou senha Incorretos";
            }
        }


    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!--pagina de log teste -->
    <h1>Acesse sua Conta !!!</h1>
   <form action="" method="post">
       <p>
       <label for="email"></label>
       <input type="text" name="email">
       </p>
       <p>
       <label for="email"></label>
       <input type="password" name="senha">
       </p>
       <p>
           <button type="submit">Entrar</button>
       </p>
    
       




</form>
    
</body>
</html>