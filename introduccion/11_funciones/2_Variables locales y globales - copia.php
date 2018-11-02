<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>

<body>

    <div class="jumbotron">
        <h1 class="display-4">Var Scope</h1>
        <p class="lead">7</p>
        <hr class="my-4">
        <p>
            Variables locales: <br>
            Son las q se definen dentro de una funcion y no pueden ser usadas fuera de la funcion. <br>
            Variables Globales: <br>
            Son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones.
           <br>
        </p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
              <?php
                $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres.";
                echo $frase."<br/>" ;
                function holaMundo() {
                    global $frase;
                    echo  $frase;

                    $year = 2019;
                    echo $year;
                }
                echo $year;
                holaMundo();
            ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>