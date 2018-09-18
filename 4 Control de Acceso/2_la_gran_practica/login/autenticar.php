<?php

/**
 *  Filtro inputs
 */

function filterInput ( $input ) {
    //  Escapa un string con barras invertidas
    $input = addslashes($input);
    // Retira las etiquetas HTML y PHP de un string
    $input = strip_tags($input);
     // Elimina espacio en blanco
     $input = trim($input); 
     // Quita /
     $input = stripcslashes($input);
     // incercion html
     $input = htmlspecialchars($input);

     return $input;
}

//recuperamos usuario mediante el método POST y lo filtramos para evitar códigos maliciosos
$usuario = filterInput($_POST['p_username']);

//recuperamos la contraseña mediante el método POST y lo filtramos para evitar códigos maliciosos
$contrasena = filterInput($_POST['p_password']);

//CONEXIÓN CON LA BASE DE DATOS



//Comprobación manual que el usuario y la contraseña es correcta

if($usuario == 'qweqwe' && $contrasena == '123123'){
	define('PAGINA_INICIO','../main/index.php');
	header('Location: '.PAGINA_INICIO);

}else{
	//redireccionar a la página de inicio
	define('PAGINA_INICIO','../index.php?mensaje=mensaje_error');
	header('Location: '.PAGINA_INICIO); //header redirecciona a donde queramos
	
}












