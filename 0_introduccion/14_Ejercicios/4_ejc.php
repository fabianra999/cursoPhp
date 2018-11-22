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
           crear un array con el contenido de la una tabla juegos de accion , aventura, deportes
           imprimir en una tabla html.
           <br>
        </p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8">
            <?php
              $juegos = [
                  'accion' => [
                        "Accion_1","Accion_2","Accion_3"
                  ],
                  'aventura' => [
                        "Aventura_1","Aventura_2","Aventura_3"
                  ],
                  'deportes' => [
                        "Deportes_1","Deportes_2","Deportes_3"
                  ]
                ];
                
                //var_dump ($juegos[0]);
                echo "<br/>";
                var_dump ($juegos['accion'][0]);
                echo "<br/>";
                var_dump ($juegos);


                $categorias = array_keys($juegos);
            ?>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <?php foreach ($categorias as $key => $value) :?>
        <th scope='col'><?= $value ?></th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><?= $juegos['accion'][0]; ?></td>
          <td><?= $juegos['aventura'][0]; ?></td>
          <td><?= $juegos['deportes'][0]; ?></td>
      </tr>
      <tr>
          <td><?= $juegos['accion'][1]; ?></td>
          <td><?= $juegos['aventura'][1]; ?></td>
          <td><?= $juegos['deportes'][1]; ?></td>
      </tr>
      <tr>
          <td><?= $juegos['accion'][2]; ?></td>
          <td><?= $juegos['aventura'][2]; ?></td>
          <td><?= $juegos['deportes'][2]; ?></td>
      </tr>
  </tbody>
</table>
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