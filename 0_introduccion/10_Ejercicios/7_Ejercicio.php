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
           Hacer un programa q muestre todos los numeros entre dos numeros por url<br>
           - impares<br>
        </p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
              <?php
            
                if (isset( $_GET['numero1']) && $_GET['numero2'] ) {
                    $numero1 = (int)$_GET['numero1'];
                    $numero2 = (int)$_GET['numero2']; 
                    if ($numero1 < $numero2) {
                        for ($i=$numero1; $i <=$numero2 ; $i++) { 
                            
                            if ($i%2 != 0 ) {
                                echo "$i, ";
                            }
                            
                        }
                    } else {
                        echo "<h1>numero 1 deve ser menor a numero2</h1>";
                    }
                } else {
                   echo "<h1>los parametros get no existen</h1>";
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