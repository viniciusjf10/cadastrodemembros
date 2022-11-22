<?php
if (!isset($_SESSION)){
    session_start();
}
include("conexao.php");
ini_set('default_charset','UTF-8');

//Consultas topo do dashboard
    $totalAlunos = 0;
    $totalProfs = 0;
    $totalAlunosNResponderam = 0;
    $unidade = $_SESSION['dadosDiretor'][2];
    $consPessoas = "SELECT * FROM dadosalunos WHERE unidade = '$unidade' ";
    $consultaPessoas = mysqli_query($conn, $consPessoas);
    
    while($dados = mysqli_fetch_array($consultaPessoas)){
        if($dados['Tipo'] == 'A'){
            $totalAlunos +=1;
            if($dados['Tipo'] == 'A' AND $dados['Respondeu'] == 0){
                $totalAlunosNResponderam +=1;
            } 
        }
        if($dados['Tipo'] == 'P'){
            $totalProfs +=1;
        }
    }

    $percentualRespondido = ($totalAlunos-$totalAlunosNResponderam)/$totalAlunos;