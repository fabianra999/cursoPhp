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
    <h1 class="display-4">Ejercicios PHP</h1>
    <p class="lead"></p>
    <hr class="my-4">
    <p>
        Hacer una interfaz de usuario formulario dos inputs y 4 botones
    </p>
    <br>
    <ul>
        <li></li>
    </ul>
</div>

<?php

    $resultado = false;
    if ( isset($_POST['numero1']) && isset($_POST['numero2']) ) {
        if (isset($_POST['suma'])) {
            $resultado = "El resultado es = " . ($_POST['numero1'] + $_POST['numero2']);
        } elseif (isset($_POST['resta'])) {
            $resultado = "El resultado es = " . ($_POST['numero1'] - $_POST['numero2']);
        } elseif (isset($_POST['multiplica'])) {
            $resultado = "El resultado es = " . ($_POST['numero1'] * $_POST['numero2']);
        } elseif (isset($_POST['divide'])) {
            $resultado = "El resultado es = " . ($_POST['numero1'] / $_POST['numero2']);
        }
    }


?>
<form action="" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <label for="numero1">Numero_1</label> <input type="text" name="numero1">
            </div>

            <div class="col-4">
                <label for="numero2">Numero_1</label> <input type="text" name="numero2">
            </div>

            <div class="col-4">
                <input type="submit" value="Suma" name="suma"> <input type="submit" value="Resta" name="resta">
                <input type="submit" value="Multiplica" name="multiplica">
                <input type="submit" value="Divide" name="divide">
            </div>
            <div class="col-12">
                <?php
                    if ($resultado != false) :
                        echo "<h2>$resultado</h2>";
                    endif;
                ?>
            </div>
        </div>
    </div>

</form>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>