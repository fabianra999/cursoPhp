<?php
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

 if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png") {
    if (!is_dir('upload')) {
        mkdir('upload', 0777);
    }
    move_uploaded_file($archivo['tmp_name'], 'upload/'.$nombre);
    echo 'img subida';
    header("Refresh: 5; URL=0_subidas.php");

} else {
    header("Refresh: 5; URL=0_subidas.php");
    echo 'formato incorrecto';
} 

var_dump($archivo);