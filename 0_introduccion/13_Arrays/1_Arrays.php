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
            Es una colecciono conjunto de datos Variable de variables. bajo un unico nombre.
           <br>
        </p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
            <?php
                $pelicula = array('item1','item2', 'item3');
                $cantanstes = ['item1','item2', 'item3'];

                // Array asociativo
                $persona = [
                    'nombre' => 'Teso',
                    'apellido' => 'Teso2',
                    'web' => 'Tesowww'
                ];

                // Array Multidimencional
                    $contactos = [
                        array (
                            'nombre' => 'Tony',
                            'email' => 'Tony@gmail.com',
                        ),
                        array (
                            'nombre' => 'Luis',
                            'email' => 'Luis@gmail.com',
                        ),
                        array (
                            'nombre' => 'Pepe',
                            'email' => 'Pepe@gmail.com',
                        )
                    ];

                var_dump($pelicula); 
                echo '<br/>';
                var_dump($pelicula[2]); 
                echo '<br/>';
                var_dump($cantanstes);
                 echo '<br/>';
                 var_dump($cantanstes[2]);
                 echo '<br/>';
                 echo '<br/>';

                 for ($i=0; $i<count($pelicula); $i++){
                    echo "pelicula ".$pelicula[$i]."<br/>";
                 }
                 echo '<br/>';
                 echo '<br/>';
                 foreach ($cantanstes as  $cantanste) {
                    echo "cantanstes ".$cantanste."<br/>";
                 }
                 echo '<br/>';
                 echo '<br/>';
                 var_dump($persona);
                 echo '<br/>';
                 echo $persona['web'];
                 echo '<br/>';
                 echo '<br/>';
                 var_dump($contactos);
                 echo '<br/>';
                 echo $contactos[0]['nombre'];
                 echo '<br/> <h2>Recorre</h2>';
                 foreach ($contactos as $key => $contacto) {
                     echo $key.' '."<p>".$contacto['nombre']."</p>".'<br/>';
                     
                     var_dump ($contacto['nombre']);
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