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
            $xUnidade  = ($dados[6]);

            // constante para 2021.2
            $xSave_Periodo = 13;            

            // pegando o código da Unidade
            $consulta_idTurma = ("SELECT IdTurma FROM Turmas WHERE Turma = '$xTurma';");
            $PegaIdTurma = mysqli_query($conn,$consulta_idTurma);
            $xIdTurma = mysqli_fetch_array($PegaIdTurma);

            $xSave_Turma = $xIdTurma[0];

            echo $xSave_Turma . "<br />";

            // pegando o Id do usuário
            $consulta_idusuario = ("SELECT IdUsuario FROM Users WHERE Usuario = '$xAluno';");
            $PegaIdUsuario = mysqli_query($conn,$consulta_idusuario);
            $xIdUsuario = mysqli_fetch_array($PegaIdUsuario); 
            
            $xSave_Usuario = $xIdUsuario[0];

            echo $xSave_Usuario . "<br />";

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

            $a = "INSERT INTO Users_Turmas (UsuarioId, TurmaId, PeriodoId) 
            VALUES($xSave_Usuario, '$xSave_Turma', $xSave_Periodo)";
            echo $a . "<br />";

            // incluindo os dados na tabela
            $inclui = $conn->query("INSERT INTO Users_Turmas (UsuarioId, TurmaId, PeriodoId) 
            VALUES($xSave_Usuario, '$xSave_Turma', $xSave_Periodo)");
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
