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
        <h1 class="display-4">condicional.</h1>
        <p class="lead"> if, switch</p>
        <hr class="my-4">
        <p>Operadores de comparacion, Operadores Logicos</p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4">
              <?php 
                 /* Operadores de comparacion
                    ==  => igual;
                    === => identico;
                    !=  => Dierente;
                    <>  => Diferente;
                    !== => No identico;
                    <   => menor q;
                    >   => Mayor q; 
                    <=  => menor o igual q;
                    >=  => Mayor o igual q; 
                */

                /* Operadores Logicos
                 && => AND;
                 || => OR O;
                 !  => Not No;

                 */


/*************************************************************************** 
                Ejemplo 1
*/
                // Variables
                $color = "rojo";

                // IF
                if ($color == "rojo") {
                    echo 'El color es: '.$color.'</br>';
                } else {
                    echo 'El color no es: '.$color.'</br>';
                }

/*************************************************************************** 
                Ejemplo 2
*/
                // Var 
                $year = 2019;
                // IF
                if ($year <= 2019) {
                    echo "Estamos en 2019".'</br>';
                }else {
                    echo "No stamos en 2019".'</br>';
                }

/*************************************************************************** 
                Ejemplo 3
*/
                $edad = 42;
                $ciudad = 'Bogota';
                $continente = 'Europa';
                $mayoriaEdad = 18;

                if ($edad >= $mayoriaEdad) {
                    echo 'Eres mayor de edad: '.$edad.'</br>';
                    if ($continente !== 'Europa') {
                        echo '<h2>y es de '.$ciudad.'</h2>';
                    } else {
                        echo '<h2>No es Americano</h2>';
                    }
                } else {
                    echo 'No eres mayor de edad: '.$edad.'</br>';
                }

/*************************************************************************** 
                Ejemplo 4
*/

                $dia = 3;

                if ($dia == 1) {
                    echo '<h2>Es lunes</h2></br>';
                }else if($dia == 2) {
                    echo '<h2>Es nartes</h2></br>';
                }else if($dia == 3) {
                    echo '<h2>Es miercoles</h2></br>';
                }else if($dia == 4) {
                    echo '<h2>Es jueves</h2></br>';
                } else {
                    echo '<h2>Es viernes</h2></br>';
                }
/*************************************************************************** 
                switch
*/
                echo '<h2>switch</h2></br>';

                switch ($dia) {
                    case 1:
                        echo '<h2>Es lunes</h2></br>';
                        break;
                    case 2:
                        echo '<h2>Es martes</h2></br>';
                        break;
                    case 3:
                        echo '<h2>Es miercoles</h2></br>';
                        break;
                    case 4:
                        echo '<h2>Es jueves</h2></br>';
                        break;
                    default:
                    echo '<h2>Es viernes</h2></br>';
                        break;
                }
/*************************************************************************** 
                Ejemplo 5
*/         

                $edad1 = 18;
                $edad2 = 64;
                $edadOficial = 20;
                if ($edadOficial >=$edad1 && $edadOficial <= $edad2) {
                    echo '<h2>Es ta en edad de trabajar</h2></br>';
                } else {
                    echo '<h2>No es ta en edad de trabajar</h2></br>';
                }
/*************************************************************************** 
                GOTO
*/   
                echo '<h2>GOTO</h2></br>';
                
                goto marca;
                echo '<h2>Es ta en 1</h2></br>';
                echo '<h2>Es ta en 2</h2></br>';
                echo '<h2>Es ta en 3</h2></br>';
                marca:
                echo '<h2>Es ta en 4</h2></br>';
                echo '<h2>Es ta en 5</h2></br>';

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