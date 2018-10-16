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
        <h1 class="display-4">Tipos de datos</h1>
        <p class="lead">PHP</p>
        <hr class="my-4">
        <p>Tipo de informacion contenida en una variable</p>
    </div>

    <?php
        /* 
        Entero => (int / integer) = 99
        flotante => (decimal / fload) = 3.14
        cadenas => (string) = 'Hola mundo'
        Boleano => (bool) = true false
        null
        array   => (Coleccionde datois)
        Objetos
        */

        // Entero
        $numero = 100;
        echo gettype($numero);
        echo '<br>';
        // Degugear
        var_dump($numero);
        echo '<br><br>';
        
        // fload
        $testFload = 3.14;
        echo gettype($testFload);
        echo '<br>';
        // Degugear
        var_dump($testFload);
        echo '<br><br>';
        
        // fload
        $texto = 'Hola mundo';
        echo gettype($texto);
        echo '<br>';
        // Degugear
        var_dump($texto);
        echo '<br><br>';
        
        // Boleano
        $verdadero = true;
        echo gettype($verdadero);
        echo '<br>';
        // Degugear
        var_dump($verdadero);
        echo '<br><br>';

        // Boleano
        $null; //$null = null;
        echo gettype($null);
        echo '<br>';
        // Degugear
        var_dump($null);
        echo '<br><br>';
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>