<?php
if (!isset($_SESSION)){
    session_start();
}
include("conexao.php");
ini_set('default_charset','UTF-8');

unset($_SESSION['nomeUsuario']);
unset($_SESSION['unidadeUsuario']);

header("location: ./index.php");