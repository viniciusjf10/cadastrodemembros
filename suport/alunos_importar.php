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
            $xAluno    = ($dados[0]);
            $xAcesso   = ($dados[1]);
            $xSenha    = ($dados[2]);
            $xSituacao = ($dados[3]);
            $xUnidade  = ($dados[4]);
            $xTurma    = ($dados[5]);

            // echo $xAluno . "<br />";
            // echo $xAcesso . "<br />";
            // echo $xSenha . "<br />";
            // echo $xSituacao . "<br />";
            // echo $xUnidade . "<br />";
            // echo $xTurma . "<br />";
            // echo "---------------------" . "<br />";

            // constante porque todos são alunos
            $xSave_Tipo = 'A';

            // constante para 2021.2
            $xSave_Periodo = 13;

            // constante porque é para o início da migração
            $xSave_Respondeu = 0;

            // pegando o código da Unidade
            $consulta_idunidade = ("SELECT IdUnidade, Participa FROM Unidades WHERE Unidade = '$xUnidade';");
            $PegaIdUnidade = mysqli_query($conn,$consulta_idunidade);
            $xIdUnidade = mysqli_fetch_array($PegaIdUnidade);

            $xSave_Unidade = $xIdUnidade[0];
            $xSave_Participa = $xIdUnidade[1];

            // echo $xAluno . "<br />";
            // echo $xAcesso . "<br />";
            // echo $xSenha . "<br />";            
            // echo $xSituacao . "<br />";
            // echo $xSave_Tipo . "<br />";
            // echo $xSave_Participa . "<br />";
            // echo $xSave_Periodo . "<br />";
            // echo $xSave_Respondeu . "<br />";
            // echo $xSave_Unidade . "<br />";
            // echo "---------------------" . "<br />";

            $a = "INSERT INTO Users (Usuario, Acesso, Senha, SituacaoBD, Tipo, Participa, PeriodoId, Respondeu) 
            VALUES('$xAluno', '$xAcesso', '$xSenha', $xSituacao, '$xSave_Tipo', $xSave_Participa, $xSave_Periodo, $xSave_Respondeu)";
            // echo $a . "<br />";

            // incluindo os dados na tabela
            $inclui = $conn->query("INSERT INTO Users (Usuario, Acesso, Senha, SituacaoBD, Tipo, Participa, PeriodoId, Respondeu) 
            VALUES('$xAluno', '$xAcesso', '$xSenha', $xSituacao, '$xSave_Tipo', $xSave_Participa, $xSave_Periodo, $xSave_Respondeu)");

            if($inclui)
            {
                echo "Dados importados com sucesso => " . $xAluno . " - " . $xSave_Unidade . "<br />";
            } else
            {
                echo "Erro na importação dos dados => " . $xAluno . " - " . $xSave_Unidade . "<br />";
            }          
        }

        // mensagem de encerramento
        if($inclui)
        {
            echo "Dados importados com sucesso!";
        } else
        {
            echo "Erro na importação dos dados";
        }

    }

?>
