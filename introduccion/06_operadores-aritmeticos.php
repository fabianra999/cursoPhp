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
        <h1 class="display-4">Operadores Aritmeticos</h1>
        <p class="lead">PHP</p>
        <hr class="my-4">
        <p>+ - * / %</p>
    </div>

    <?php
        $numero1 = 55;
        $numero2 = 33;
        $ano = 2018;
        $edad = 55;
        
    // Operadores Aritmeticos
        echo 'Suma: '.($numero1 + $numero2).'</br>';
        echo 'Resta: '.($numero1 - $numero2).'</br>';
        echo 'Multiplica: '.($numero1 * $numero2).'</br>';
        echo 'Division: '.($numero1 / $numero2).'</br>';
        echo 'Modulo - Resto: '.($numero1 % $numero2).'</br>'.'</br>';
    
    // Operadores Incremento y decremento

        echo 'Incremento: '.$ano++.'</br>'; // $ano = $ano + 1;
        echo 'Pre-Incremento: '.++$ano.'</br>'; // $ano = 1 + $ano;
        echo 'Decremento: '.$ano--.'</br>'; // $ano = $ano - 1;
        echo 'Pre-Decremento: '.--$ano.'</br>'.'</br>'; // $ano = 1 - $ano;

    // Operadores de asignacion

        echo 'Edad: '.$edad.'</br>';
        echo 'Edad + = 5: '.($edad += 5).'</br>'; // $edad = $edad + 5;
        echo 'Edad - = 5: '.($edad -= 5).'</br>'; // $edad = $edad - 5;
        echo 'Edad * = 5: '.($edad *= 5).'</br>'; // $edad = $edad * 5;
        echo 'Edad / = 5: '.($edad /= 5).'</br>'; // $edad = $edad / 5;
     
     

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>