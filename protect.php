<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Faça login para exibir esta pagina! <p><a href=\"index.php\">Entrar</a></p>");
}