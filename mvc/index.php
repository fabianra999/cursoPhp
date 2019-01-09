<?php
require_once 'autoload.php';


if (isset( $_GET['controller'])) {
    $nombre_controlador = $_GET['controller'].'Controller';
    //var_dump($nombre_controlador);
} else {
    echo 'La pagina buscada no existe';
    exit();
}
if (class_exists($nombre_controlador)){
    
    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
    
        $controlador->$action();
    
    } else {
        echo 'La pagina buscada no existe';
    }
    
}  else {
    echo 'La pagina buscada no existe';
}

/*
$controlador = new UsuarioController();
 $controlador->mostrarTodos();
$controlador->crear(); 
*/


