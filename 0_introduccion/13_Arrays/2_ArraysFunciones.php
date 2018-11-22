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
        <h1 class="display-4">Array.</h1>
        <p class="lead">7</p>
        <hr class="my-4">
        <p>
            Funciones para arrays
           <br>
        </p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8">
            <?php
                $cantantes =['cantante_2','cantante_0', 'cantante_1', 'cantante_3'];

                // Ordena de forma alfabética el array
                echo '<h2>Orden alfabetico</h2> <br/>';
                asort($cantantes);
                var_dump($cantantes); 
                
                // Ordena de forma alfabética inversa el array
                echo '<h2>Orden alfabetico inverso</h2> <br/>';
                arsort($cantantes);
                var_dump($cantantes);
                
                // Ordena de forma alfabética y numerica mente el array
                echo '<h2>Orden alfabética y numerica mente</h2> <br/>';
                sort($cantantes);
                var_dump($cantantes);
                
                // Añadir elemento array
                echo '<h2>Añadir elemento</h2> <br/>';
                $cantantes[] = 'cantante_X';
                array_push($cantantes, 'cantante_Y');
                var_dump($cantantes);
                
                // Eliminar elemento array
                echo '<h2>Eliminar elemento</h2> <br/>';
                array_pop($cantantes);
                unset($cantantes[4]);
                var_dump($cantantes);
                
                // Elemento aleatorio
                echo '<h2>Elemento aleatorio</h2> <br/>';
                $indice = array_rand($cantantes);
                var_dump($cantantes[$indice]);
                echo $cantantes[$indice];
                
                // Buscar
                echo '<h2>Buscar item</h2> <br/>';
                var_dump( array_search('cantante_1', $cantantes) );
                
                // Contar
                echo '<h2>Contar items</h2> <br/>';
                var_dump( count( $cantantes) );
                var_dump( sizeof( $cantantes) );




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