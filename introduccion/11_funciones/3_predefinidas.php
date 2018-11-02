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
        <h1 class="display-4">funciones predefinidas</h1>
        <p class="lead">7</p>
        <hr class="my-4">
        <p>
            Funciones del estandar<br>
            Son las q se definen dentro de una funcion y no pueden ser usadas fuera de la funcion. <br>
        
           <br>
        </p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
              <?php
              $nombre = "Tito";
              echo "<br/>";

              // Debuggear
              var_dump($nombre);
              echo "<br/>";
              //Fecha
              echo date('d-m-y');
              echo "<br/>";
              echo time();
              echo "<br/>";
              echo "<br/>";

              // Matematicas
              echo "Raiz cuadrada de 10".sqrt(10);
              echo "<br/>";
              echo "Numero aleatorio entre 10 y 40".rand(10,40);
              echo "<br/>";
              echo "pi ".pi();
              echo "<br/>";
              echo "Redondear al alsa ".round(7.89158);
              echo "<br/>";
              echo "Redondear con decimales".round(7.89158, 2);
              echo "<br/>";
              echo "<br/>";
              
              // Mas funciones generales
              gettype($nombre);
              echo "<br/>";
              
              // Tipo de dato is_XXXX
              if(is_string($nombre)){
                  echo "Es un string";
                }
                echo "<br/>";
                // Existe la variable 
                if (isset($nombre)) {
                    echo "el nombre existe";
                }
                echo "<br/>";
                // limpia el contenido de la variable espacios
                echo trim($nombre);
                echo "<br/>";
                // Eliminar variables o indices 
                $year = 2020;
                unset($year);
                // comporovar si la variable esta vacia
                if (empty($nombre12)){
                    echo "esta vacia";
                }else{
                    echo "no esta vacia";
                }
                echo "<br/>";
                // tamaño de cadena
                echo strlen($nombre);
                echo "<br/>";
                // Buscar caracter
                echo strpos($nombre, "Ti");
                echo "<br/>";
                // Remplaza contenido de string
                echo str_replace("Ti", "ti", $nombre);
                echo "<br/>";
                // Mayusculas y minusculas
                echo strtolower($nombre);
                echo "<br/>";
                echo strtoupper($nombre);
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