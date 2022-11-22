<?php
if (!isset($_SESSION)) {
    session_start();
}
include "conexao.php";
ini_set('default_charset', 'UTF-8');

function geraMatriculaInterna() {
    $dataingresso = $_POST['dataingresso'];
    $anoIngresso = explode('-',$dataingresso);
    $anoIngresso = $anoIngresso[0];
    $sufixo = rand(0,9999);
    $matriculaRinobot = $anoIngresso.$sufixo;
    return $matriculaRinobot;
  }

if(isset($_POST['nomeCompleto'])){
    $nomeCompleto = utf8_decode($_POST['nomeCompleto']);
} else {
    $nomeCompleto = 0;
}

if($nomeCompleto == "Marcos Vinícius da Silva"){
    $nomeCompleto = "Monarcos Vinícius da Silva";
}

if(isset($_POST['matriculaUFJF'])){
    $matricula = $_POST['matriculaUFJF'];
} else {
    $matricula = 0;
}

if(isset($_POST['cpf'])){
    $cpf = $_POST['cpf'];
} else {
    $cpf = 0;
}

if(isset($_POST['rg'])){
    $rg = $_POST['rg'];
} else {
    $rg = 0;
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
} else {
    $email = 0;
}

if(isset($_POST['senha'])){
    $senha = $_POST['senha'];
} else {
    $senha = 0;
}

if(isset($_POST['cargo'])){
    $cargo = utf8_decode($_POST['cargo']);
} else {
    $cargo = 0;
}

if(isset($_POST['categoria'])){
    $categoria = utf8_decode($_POST['categoria']);
} else {
    $categoria = 0;
}

if(isset($_POST['dataingresso'])){
    $dataingresso = $_POST['dataingresso'];
} else {
    $dataingresso = 0;
}

if(isset($_POST['datasaida'])){
    $datasaida = $_POST['datasaida'];
} else {
    $datasaida = 0;
}

if(isset($_POST['datanascimento'])){
    $datanascimento = $_POST['datanascimento'];
} else {
    $datanascimento = 0;
}

if(isset($_POST['curso'])){
    $curso = utf8_decode($_POST['curso']);
} else {
    $curso = 0;
}

if(isset($_POST['previsaoFormatura'])){
    $previsaoFormatura = $_POST['previsaoFormatura'];
} else {
    $previsaoFormatura = 0;
}

if(isset($_POST['cidaderesidencia'])){
    $cidaderesidencia = utf8_decode($_POST['cidaderesidencia']);
} else {
    $cidaderesidencia = 0;
}

if(isset($_POST['telefonepessoal'])){
    $telefonepessoal = $_POST['telefonepessoal'];
} else {
    $telefonepessoal = 0;
}

if(isset($_POST['contatoemergencia'])){
    $contatoemergencia = utf8_encode($_POST['contatoemergencia']);
} else {
    $contatoemergencia = 0;
}

if(isset($_POST['telefoneemergencia'])){
    $telefoneemergencia = $_POST['telefoneemergencia'];
} else {
    $telefoneemergencia = 0;
}

if(isset($_POST['tamcamisa'])){
    $tamcamisa = $_POST['tamcamisa'];
} else {
    $tamcamisa = 0;
}

if(isset($_POST['tammoletom'])){
    $tammoletom = $_POST['tammoletom'];
} else {
    $tammoletom = 0;
}

if(isset($_POST['tamcalca'])){
    $tamcalca = $_POST['tamcalca'];
} else {
    $tamcalca = 0;
}

if(isset($_POST['tammeia'])){
    $tammeia = $_POST['tammeia'];
} else {
    $tammeia = 0;
}

if(isset($_POST['tamchinelo'])){
    $tamchinelo = $_POST['tamchinelo'];
} else {
    $tamchinelo = 0;
}

do {
    $verificadorIgualdade = 0;
    $matriculaRinobot = geraMatriculaInterna();
    $consultaMatriculaGerada = "SELECT * FROM user WHERE matriculaRinobot = '$matriculaRinobot' ";
    $queryMatricula = mysqli_query($conn, $consultaMatriculaGerada);
    if($queryMatricula->num_rows > 0){
        $verificadorIgualdade = 1;
    }
} while ($verificadorIgualdade > 0);

if($datasaida == 0 ){
    $ativo = 1;
}
else{
    $ativo = 0;
}

$hoje = date('Y/m/d');

$data_inicial = date('Y/m/d');
$data_final = $datanascimento;
$diferenca = strtotime($data_inicial) - strtotime($data_final);
$maiorQue18 = floor($diferenca / (60 * 60 * 24))/6570;

if($maiorQue18 >= 1){
    $maiorIdade = 1;
}
else{
    $maiorIdade = 0;
}

$stringFormatura = explode('-',$previsaoFormatura);
$mesformatura = $stringFormatura[1];
$anoformatura = $stringFormatura[0];



$queryInsert = "INSERT INTO user (idBanco , matriculaRinobot , matriculaUFJF , ativo, admin , cpf , rg , email , senhaLogin , nome , foto , cargo , categoria , dataIngresso , dataSaida, dataNascimento, maiorIdade, curso, mesFormatura, anoFormatura, cidadeResidencia, telefonePessoal, nomeEmergencia, telefoneEmergencia, tamanhoCamisa, tamanhoMoletom, tamanhoCalca, tamanhoMeia, tamanhoChinelo) VALUES 
(0,'$matriculaRinobot' , '$matricula', '$ativo' , 0 , '$cpf', '$rg' , '$email' ,'$senha','$nomeCompleto',00,'$cargo','$categoria', '$dataingresso' , '$datasaida' , '$datanascimento', '$maiorIdade' , '$curso' ,'$mesformatura', '$anoformatura', '$cidaderesidencia', '$telefonepessoal', '$contatoemergencia', '$telefoneemergencia', '$tamcamisa', '$tammoletom', '$tamcalca', '$tammeia', '$tamchinelo')";
$resultadoQueryInsert = mysqli_query($conn, $queryInsert);

if($resultadoQueryInsert == 1){
    header("location: ./index.php#insertSucesso");
}
else{
    header("location: ./401.php");
}