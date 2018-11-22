<!doctype html>
<html lang="en">

<?php require'header/head.php' ?>

<body>

    <div class="jumbotron">
        <h1 class="display-4">includes.</h1>
        <p class="lead">7</p>
        <hr class="my-4">
        <p>
        require es idéntico a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia (E_WARNING) lo cual permite continuar el script.
        </p>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
            </div>
        </div>
    </div>

    <?php require'script/1_includes.php'?>
</body>

</html>
