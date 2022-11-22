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
            $xPeriodo = ($dados[0]);
            $xTurma   = ($dados[1]);
            $xSerie   = utf8_encode($dados[2]);
            $xCurso   = utf8_encode($dados[3]);
            $xUnidade = utf8_encode($dados[4]);
            $xInicio  = ($dados[5]);
            $xTermino = ($dados[6]);

            // pegando o código da Unidade
            $consulta_idunidade = utf8_decode("SELECT IdUnidade, Participa FROM Unidades WHERE Unidade = '$xUnidade';");
            $PegaIdUnidade = mysqli_query($conn,$consulta_idunidade);
            $xIdUnidade = mysqli_fetch_array($PegaIdUnidade);

            $xSave_Unidade = $xIdUnidade[0];
            $xSave_Participa = $xIdUnidade[1];

            // pegando o código do curso
            $consulta_idcurso = utf8_decode("SELECT IdCurso FROM Cursos WHERE Codigo = '$xCurso';");
            $PegaIdCurso = mysqli_query($conn,$consulta_idcurso);
            $xIdCurso = mysqli_fetch_array($PegaIdCurso);

            $xSave_Curso = $xIdCurso[0];

            // pegando o código da série
            $consulta_idserie = utf8_decode("SELECT IdSerie FROM Series WHERE Serie = '$xSerie';");
            $PegaIdSerie = mysqli_query($conn,$consulta_idserie);
            $xIdSerie = mysqli_fetch_array($PegaIdSerie);

            $xSave_Serie = $xIdSerie[0];

            // incluindo os dados na tabela
            $inclui = $conn->query("INSERT INTO Turmas (UnidadeId, CursoId, SerieId, Turma, PeriodoId, Participa) 
            VALUES($xSave_Unidade, $xSave_Curso, $xSave_Serie, '$xTurma', $xPeriodo, $xSave_Participa)");
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
