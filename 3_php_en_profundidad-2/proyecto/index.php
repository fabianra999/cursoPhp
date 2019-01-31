<!doctype html>
<html lang="es">
<head>
    <title>Proyecto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <header>
        <!--nav-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="assets/img/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top"> Bootstrap
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Categoria 1</a>
                    <a class="nav-item nav-link" href="#">Categoria 2</a>
                    <a class="nav-item nav-link" href="#">Categoria 3</a>
                    <a class="nav-item nav-link" href="#">Categoria 4</a>
                    <a class="nav-item nav-link" href="#">Contacto</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="principal">
                    <div class="row">
                        <div class="col-12">
                            <div class="title">
                                <h1>Entradas</h1>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="card">
                                <article class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="formUsuario">
                    <form action="login.php" method="post" class="px-4 py-3">
                        <h4>Login</h4>
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Email </label>
                            <input type="email" class="form-control" name="email" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Contraseña </label>
                            <input type="password" class="form-control" name="password" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
                <div class="formUsuario">
                    <form action="registro.php" method="post" class="px-4 py-3">
                        <h4>Registro</h4>
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Apellidos</label>
                            <input type="text" class="form-control" name="email" placeholder="apellidos">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Email </label>
                            <input type="email" class="form-control" name="email" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Contraseña </label>
                            <input type="password" class="form-control" name="password" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">Registor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>DEsarrollado por xxx &copy; 2018</p>
    </footer>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>