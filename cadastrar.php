<?php

session_start();

ob_start();

include('arquivo.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastre-se</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="Doctors-pana.svg" alt="">
        </div>
        <div class="form">
            <form action="" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="index.php">Entrar</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input type="text" id="firtsname" name="firstname" placeholder="Nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input type="text" id="lastsname" name="lastname" placeholder="Sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmpassword">Confirme sua senha</label>
                        <input type="password" id="conpfirmassword" name="confirmpassword" placeholder="Digite sua senha novamente" required>
                    </div>
                </div>
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gende-input">
                            <input type="radio" id="female" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gende-input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gende-input">
                            <input type="radio" id="othes" name="gender">
                            <label for="othes">Outro</label>
                        </div>

                        <div class="gende-input">
                            <input type="radio" id="none" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                <div class="continue-botton">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>