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
        <h1 class="display-4">Ejercicio.</h1>
        <p class="lead">7</p>
        <hr class="my-4">
        <p>
           Hacer un programa q compruevbe si una variable esta vacia y si esta vacia rellenala con texto en minuscula e imprimirla en mayuscula y negrita.:
           1. Añadir elementos mientras su longitud sea menor a 120
           2. Ordenarlo y nostrarlo
           3. Mostrar su longitus
           4. Buscar un elemento por get
           <br>
        </p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8">
            <?php
             $texto = ""; 
             if (empty($texto)){
                $texto = "hola mundo"; 
                echo "<b>".strtoupper($texto)."</b>";
            } else{
                echo "<b> La variable ya tiene contenido : $texto</b>";
             }
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