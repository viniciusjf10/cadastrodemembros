<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Importar período</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">

            <div class="jumbotron">
                <h2>Upload CSV dos períodos</h2>

                <form action="periodos_importar.php" method="post" enctype="multipart/form-data">

                    <div class="checkbox">
                        <label><input type="file" name="file"></label>
                    </div>

                    <button type="submit" class="btn btn-default">Enviar</button>
                </form>

            </div>

        </div>

    </body>

</html>
