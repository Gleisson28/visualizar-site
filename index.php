<?php
include('arquivo.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL:" . $mysqli->error);
        
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
           
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
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
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <div class="main-login">
            <div class="left-login">
                <h1>Bem vindo ao<br> Hospital Dr. Sansão Gomes</h1>
                <img src="medico-animation.svg" class="left-login-img" alt="">
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>Login</h1>
                    <div class="textfield">
                        <label for="email">Usuário</label>
                        <input type="text" name="email" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="senha">
                    </div>
                    <button type= "submit" class="btn-login">Login</button>
                    <p>Não possui uma conta? <a href="cadastrar.php">inscrever-se.</a></p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>