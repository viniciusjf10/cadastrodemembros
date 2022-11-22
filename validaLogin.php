<?php
if (!isset($_SESSION)) {
    session_start();
}
include "conexao.php";
ini_set('default_charset', 'UTF-8');

if(isset($_POST['login'])){
    $login = $_POST['login'];
} else {
    $login = 0;
}

if(isset($_POST['password'])){
    $password = $_POST['password'];
} else {
    $password = 0;
}

$email = $_SESSION['emailLogin'];
$password = $_SESSION['senhaLogin'];

$consultaLogin = "SELECT * FROM user WHERE matriculaRinobot = '$email' ";
$queryLogin = mysqli_query($conn, $consultaLogin);
$dadosLogin = mysqli_fetch_array($queryLogin);
$_SESSION['dadosUsuário'] = $dadosLogin;

if(($queryLogin) AND ($queryLogin->num_rows == 1)){
    if($dadosLogin['senhaLogin'] == $password){ //Senha correta
        if($dadosLogin['admin'] == 1){ //Admin
            header("location: ./inicio.php");
        }
        else{ //Apenas visualiza seus dados
            header("location: ./visualiza.php");
        }
    }
    else{//Senha incorreta
        header("location: ./index.php#SenhaIncorreta");
    }
}
else{//Login Inválido
    header("location: ./index.php#LoginIncorreto");
}
