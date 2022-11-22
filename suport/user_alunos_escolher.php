<!DOCTYPE html>

<?php
    // Autor: Fabio Lima
    // Programa: alunos_escolher.php
    // Criação: 10/12/2021
    // Última alteração: 10/12/2021
    // Objetivo: escolhe o arquivo csv que será migrado
    // Observação: somente arquivos csv poderão ser migrados
    //
?>

<html lang="en">

    <head>
        <title>Importar alunos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">

            <div class="jumbotron">
                <h2>Upload CSV dos alunos em suas turmas</h2>

                <form action="user_alunos_importar.php" method="post" enctype="multipart/form-data">

                    <div class="checkbox">
                        <label><input type="file" name="file"></label>
                    </div>

                    <button type="submit" class="btn btn-default">Enviar</button>
                </form>

            </div>

        </div>

    </body>

</html>
