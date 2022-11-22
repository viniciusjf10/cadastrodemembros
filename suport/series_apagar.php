<?php
    // header("Content-type: text/html; charset=utf-8");
    // header("Content-type: text/html; charset=ISO-8859-1");

    //conexão com o banco de dados
    $servidor = "apgpoa.vpshost4238.mysql.dbaas.com.br";
    $usuario = "apgpoa";
    $senha = "f0c0n04lun0!";
    $dbname = "apgpoa";

    $conn = mysqli_connect($servidor,$usuario,$senha,$dbname); 

    // excluindo dados na tabela
    $result = $conn->query("DELETE FROM Series");

    // mensagem de encerramento
    if($result)
    {
        echo "Dados excluídos com sucesso!";
    } else
    {
        echo "Erro na exclusão dos dados";
    }

?>
