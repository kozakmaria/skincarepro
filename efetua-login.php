<?php
require_once "src/UsuarioDAO.php";
$login = $_GET['email'];
$senha = $_GET['senha'];

if(UsuarioDAO::autenticarUsuario($login, $senha)){
    session_start();
    $_SESSION['login'] = $login;
    // header("location:cadastro.php");
    echo "deu boa";
} else {
    header("location:login.php");
}