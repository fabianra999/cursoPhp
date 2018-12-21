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
    una funcion q valide un email con filter_var recoger una variable por get y validar el resultado mostrandolo.
        </p>
        <br>
        <ul>
            <li></li>
        </ul>
    </div>

    <?php
    function validarEmail($inputCustom)
    {
        $status = false;
        if (!empty($inputCustom) && isset($inputCustom) && filter_var($inputCustom, FILTER_VALIDATE_EMAIL)) {
            $status = true;
        } else {
            $status = false;
        }
        return $status;
    }

    $statusInputEmail = 'none';

    if (!empty($_GET['correo'])  && validarEmail($_GET['correo']) == true) {
        $statusInputEmail = 'block';
    } else if (empty($_GET['correo']) ) {
        $statusInputEmail = 'none';
    } else {
        $statusInputEmail = 'disable';
    }


    ?>

<?php if ( $statusInputEmail == 'block') { ?>
    <div class="alert alert-primary" role="alert">
        El correo es valido 
    </div>
<?php } ?>
<?php if (  $statusInputEmail == 'disable') { ?>
    <div class="alert alert-danger" role="alert">
        El correo no es valido 
    </div>
<?php 
} ?>
<form action="index.php" method="GET">
    <label for="Correo">Correo</label>
    <input type="text" name="correo">
    <input type="submit" value="Validar">
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>