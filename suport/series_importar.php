<?php
    //conexão com o banco de dados
    $servidor = "apgpoa.vpshost4238.mysql.dbaas.com.br";
    $usuario = "apgpoa";
    $senha = "f0c0n04lun0!";
    $dbname = "apgpoa";

    $conn = mysqli_connect($servidor,$usuario,$senha,$dbname); 

    // variáveis para receber os dados do csv
    $arquivo  = $_FILES["file"]["tmp_name"];
    $nome  = $_FILES["file"]["name"];

    // para testar se o arquivo é um csv
    $ext = explode(".", $nome);
    $extensao = end($ext);

    if($extensao != "csv")
    {
        echo "Extensão inválida";
    } else 
    {
        // abrindo o arquivo para leitura
        $objeto = fopen($arquivo, 'r');

        // loop para gravar os dados na tabela do MySQL
        while(($dados = fgetcsv($objeto, 1000, ";")) !== FALSE)
        {
            $xSerie  = ($dados[0]);

            // incluindo os dados na tabela
            $result = $conn->query("INSERT INTO Series (Serie) VALUES('$xSerie')");
        }

        // mensagem de encerramento
        if($result)
        {
            echo "Dados importados com sucesso!";
        } else
        {
            echo "Erro na importação dos dados";
        }

    }

?>
