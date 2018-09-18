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


$usuario = filterInput($_POST['p_username']);


$contrasena = filterInput($_POST['p_password']);

echo "Usuario: ".$usuario;
echo "<br/>";
echo "Password: ".$contrasena;

?>