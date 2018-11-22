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
        <h1 class="display-4">Funciones.</h1>
        <p class="lead">7</p>
        <hr class="my-4">
        <p>
          Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto. Puede reutilizasrse solamente invocando a la funcion tantas veces como se requiera.<br>
           <br>
        </p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
              <?php
             /* function  nombreDEMiFuncion ($parametros){
                 Bloque  de instrucciones
             } 
             nombreDEMiFuncion($parametro);*/

             // Ejemplo1 
            function muestraNombres() {
                echo "nombre 1";
                echo "nombre 2";
                echo "nombre 3";
                echo "nombre 4";
            }

            // Invocar Funciones
            muestraNombres();
            
            echo "</br><hr>" ;
            
            // Ejemplo 2
            function tabla($numero1) {
                echo "<h3> Table del $numero1. </h3>";
               for($i = 0; $i <= 10; $i++) {
                    echo "$numero1 x $i = ".$numero1*$i."</br>";
               }
            }

           
            // Imprime
             if (isset($_GET['numero'])) {
                for ($j=1; $j<=10; $j++) {
                    tabla($j);
                }
            } else{
                echo "No hay numero para multiplicar ";
            } 

            echo "<br><hr>";

            // Ejemplo 3
            function calculadora ($numero1, $numero2, $negrita = false) {
               
                $cadena = "";

                if($negrita){
                    $cadena .= "<b>";
                }
                $cadena .= "Calcula <b>$numero1</b> y <b>$numero2</b></br>";
                // Suma
                $cadena .= "Suma <br>"."$numero1 + $numero2 =".($numero1+$numero2)."<br>";
                // Resta
                $cadena .= "Resta <br>"."$numero1 - $numero2 =".($numero1-$numero2)."<br>";
                // Multiplica
                $cadena .= "Multiplica <br>"."$numero1 x $numero2 =".($numero1*$numero2)."<br>";
                // Divide
                $cadena .= "Divide <br>"."$numero1 / $numero2 =".($numero1/$numero2)."<br>";
                if($negrita){
                    $cadena .= "</b>";
                }
                
                return $cadena;
            }
            //calculadora($_GET['numero1'], $_GET['numero2']);
            if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
                echo calculadora($_GET['numero1'], $_GET['numero2'] , $_GET['negrita']);
            } else {
                $cadena .= "No Hay numeros.";
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