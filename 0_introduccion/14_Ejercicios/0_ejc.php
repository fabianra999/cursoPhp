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
           Hacer un programa q tenga un array con 8 numeros enteros q haga:
           1. REcorrerlo y mostrarlo
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
              $lista = [1,5,9,55,78,45,35,26,59];

                // Funcion recorer
                function mostrarArray($array) {
                    $resultado = "";
                    foreach ($array as $key => $arrayItem) {
                        $resultado .=  $key.":  ".$arrayItem."<br/>";
                    }
                    return $resultado;
                }

              // Recorrer
              echo '<b>Recorer Array</b> <br/>';
              echo mostrarArray($lista);
              /* foreach ($lista as $key => $itemLista) {
                  echo "<p>"."<b>$key </b>".$itemLista."</p>";
                } */
                
                // Ordenar
                echo '<b>Ordenar Array</b> <br/>';
                sort($lista);
                echo mostrarArray($lista);
                //var_dump( $lista );
            
                // Longitud
                echo '<b>Longitud Array</b> <br/>';
                echo count($lista)."<br/>";
            
                // Buscar
               
                
                if (isset($_GET['$numero'])) {
                    $elNumero = $_GET['$numero'];
                    echo "<b>Buscar Array $elNumero</b> <br/>";
                    $busqueda = array_search($elNumero, $lista); 
                    if ( !empty($busqueda) ) {
                        echo "<p>El numero buscado existe $elNumero. esta en el indice $busqueda</p><br/>";
                    } else{
                        echo "<p>El numero buscado no existe. $elNumero</p><br/>";
                    }
                } else{
                    echo "<p>Ponga un numero en la variable numero por el metodo get<p><br/>";
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