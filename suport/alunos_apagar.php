<?php
    // Autor: Fabio Lima
    // Programa: alunos_apagar.php
    // Criação: 10/12/2021
    // Última alteração: 10/12/2021
    // Objetivo: Inicializar a tabela de usuários
    // Observação: o programa se chama alunos mas salvará dados em users
    // porque aluno é um dos usuários da POA

    //conexão com o banco de dados
    $servidor = "apgpoa.vpshost4238.mysql.dbaas.com.br";
    $usuario = "apgpoa";
    $senha = "f0c0n04lun0!";
    $dbname = "apgpoa";

    $conn = mysqli_connect($servidor,$usuario,$senha,$dbname); 

    // excluindo dados na tabela
    $result = $conn->query("DELETE FROM Users");

    // mensagem de encerramento
    if($result)
    {
        echo "Dados excluídos com sucesso!";
    } else
    {
        echo "Erro na exclusão dos dados";
    }

?>
