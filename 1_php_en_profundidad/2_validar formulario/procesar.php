<?php
$error = 'Faltan valores';
if ( !empty($_POST['nombre']) && !empty($_POST['apellido'])  
&& !empty($_POST['edad'])    && !empty($_POST['email']) 
&& !empty($_POST['pass']) ){

  $error = 'Ok';
  
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $edad = (int) $_POST['edad'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  

  // Validar nombre
  if (!is_string($nombre) || !preg_match("/[a-zA-Z ]+/", $nombre)) {
    $error = "nombreError";
  }

  // Validar apellido
  if (!is_string($apellido) || !preg_match("/[a-zA-Z ]/", $apellido)) {
    $error = "apellidoError";
  }
  
  //Validar edad
  if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
    $error = "edadError";
  }

  // Validar email
  if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))  {
    $error = "emailError";
  }

  // VALIDAR PASSWORD
    if (empty($pass) || strlen($pass)<5) {
      $error = "passwordError";
  }


  /* 
  * Test code desbug filters
  * Die mata el proceso die();
  */
  /* var_dump($_POST);
  var_dump($error);
  die(); */

} else {
  $error = 'Faltan valores';
}


if ($error != 'Ok') {
  header("Location:1_formulario.php?error=$error");
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <?php  if ($error == 'Ok') : ?>
    <p><?= $nombre?></p>
    <p><?= $apellido ?></p>
    <p><?= $edad?></p>
    <p><?= $email ?></p>
  <?php endif;  ?>
</body>
</html>