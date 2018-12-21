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
        <h1 class="display-4">Formularios PHP y html</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <p>
           Validacion Formularios PHP y html
        </p>
        <br>
        <ul>
            <li></li>
        </ul>
    </div>

    <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'Faltan valores') {
                echo '<div class="alert alert-warning" role="alert">Faltan valores</div>';
            }
            if ($error == 'nombreError') {
                echo '<div class="alert alert-warning" role="alert">El nombre esta mal</div>';
            }
            if ($error == 'apellidoError') {
                echo '<div class="alert alert-warning" role="alert">El apellido esta mal</div>';
            }
            if ($error == 'edadError') {
                echo '<div class="alert alert-warning" role="alert">El edad esta mal</div>';
            }
            if ($error == 'emailError') {
                echo '<div class="alert alert-warning" role="alert">El correo esta mal</div>';
            }
            if ($error == 'passwordError') {
                echo '<div class="alert alert-warning" role="alert">El password esta mal muy corto</div>';
            }
        }
    ?>

    <form action="procesar.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"  pattern="[A-Za-z ]+" >
                </div>
                <div class="col-12 col-sm-4">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido"  pattern="[A-Za-z ]+">
                </div>
                <div class="col-12 col-sm-4">
                    <label for="edad">Edad</label>
                    <input type="number" name="edad"  pattern="[0-9]+">
                </div>
                <div class="col-12 col-sm-4">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" >
                </div>
                <div class="col-12 col-sm-4">
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass" minlength="5" >
                </div>
                <div class="col-12 col-sm-4">
                    <input type="submit" value="Enviar">
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