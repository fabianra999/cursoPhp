<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4">Ficheros PHP</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <p>
           crear Directorio | Eliminar Directorio
        </p>
        <br>
        <ul>
            <li></li>
        </ul>
    </div>

    <?php
    // Crear directorio
    if (!is_dir('newDirectory')) {

        mkdir('newDirectory', 0777) or die('No se puede crear la carpeta');
    } else {
        echo 'ya existe la carpeta';
    }

    // Eliminar cache_javascript_headers
       //  rmdir('newDirectory');

       echo '<hr/>';
        echo '<h1>Contenido</h1>';
       if ($gestar = opendir('newDirectory')) {
            while (false !== ($archivo = readdir($gestar))) {
                    if ($archivo != '.' && $archivo != '..') {
                        echo $archivo.'<br/>';
                    }
            }
       }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>